<?php
require_once '../autoload.php';

header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

if(!isset($data['user_id'], $data['class_id'], $data['date'], $data['status'])) {
    echo json_encode(['success' => false, 'message' => 'Dati mancanti']);
    exit;
}

$conn = getConnection();

$user_id = (int)$data['user_id'];
$classe_id = (int)$data['class_id'];
$date = $data['date'];
try{
    $dateObj = DateTime::createFromFormat('d-m-Y', $date);
    $formattedDate = $dateObj ? $dateObj->format('Y-m-d') : null;
}catch(Exception $e){
    echo json_encode(['success' => false, 'message' => 'Errore nella data']);
    exit;
}
$stato = $data['status'];

if(!$formattedDate || !in_array($stato, ['P', 'A'])){
    echo json_encode(['success' => false, 'message' => 'Formato dati non valido']);
    exit;
}

$stmt = $conn->prepare("INSERT INTO presenze (user_id, classe_id, data, stato)
                        VALUES (?, ?, ?, ?)
                        ON DUPLICATE KEY UPDATE stato = VALUES(stato)");
$stmt->bind_param('iiss', $user_id, $classe_id, $formattedDate, $stato);

if ($stmt->execute()) echo json_encode(['success' => true]);
else echo json_encode(['success' => false, 'message' => $stmt->error]);

$stmt->close();
$conn->close();
?>