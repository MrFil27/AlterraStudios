# 📘 Documentazione Finale – Progetto Didattix

## 1. Introduzione
Il progetto **Didattix**, sviluppato dal team **Alterra Studios**, ha l'obiettivo di creare una piattaforma web dedicata alla gestione scolastica.  
La soluzione digitalizza processi tradizionalmente cartacei (presenze, ammonizioni), garantendo **accessibilità, sicurezza e scalabilità**.  
L'architettura modulare è stata concepita per supportare future estensioni ed evolvere verso un **ambiente didattico digitale completo**.  

---

## 2. Obiettivi
- Digitalizzare la gestione di presenze e ammonizioni disciplinari.  
- Implementare un sistema di login sicuro e personalizzato.  
- Consentire la gestione di classi e utenti.  
- Assicurare la scalabilità e la possibilità di integrazioni future.  

---

## 3. Stakeholder
- **Studenti**: consultazione delle proprie presenze e ammonizioni.  
- **Insegnanti**: registrazione delle presenze, inserimento ammonizioni e gestione classi.  

---

## 4. Analisi Preliminare
- **Nome Software**: Didattix – piattaforma web scolastica  
- **Team di sviluppo**: Alterra Studios  
- **Utenti principali**: Studenti e insegnanti  
- **Descrizione generale**: Sistema web modulare per digitalizzare attività scolastiche quotidiane: autenticazione, presenze, ammonizioni, classi.  
- **Dispositivi supportati**:  
  - Browser desktop (Windows, macOS, Linux)  
  - Browser mobile (Android, iOS)  
  - Compatibile con Chrome, Firefox, Edge, Safari  

---

## 5. Requisiti Funzionali

### Requisiti Implementati
| ID      | Descrizione | Input | Output |
|---------|-------------|-------|--------|
| AUTH-1  | Autenticazione utenti tramite credenziali personali | Username e password | Accesso all’area riservata |
| PRES-1  | Registrazione e consultazione delle presenze | Selezione della classe e stato presenza/assenza | Registro presenze aggiornato |
| AMM-1   | Inserimento e visualizzazione ammonizioni | Studente selezionato e descrizione ammonizione | Storico ammonizioni aggiornato |
| CLASS-1 | Gestione classi e associazione studenti | Dati della classe ed elenco studenti | Classi aggiornate nel sistema |

### Requisiti Futuri (Roadmap)
- Integrazione della gestione voti.  
- Agenda digitale dei compiti.  
- Potenziamento sistema presenze con statistiche avanzate.  
- Evoluzione verso un ambiente didattico digitale completo.  

---

## 6. Architettura e Tecnologie
**Architettura del Sistema**  
- Frontend (Client): HTML, CSS, JavaScript  
- Backend (Server): PHP  
- Database: MySQL  
- Deployment: Hosting con supporto PHP + MySQL  
- Backup: Configurazione automatica e periodica  

**Motivazioni delle scelte tecnologiche**  
- **PHP + MySQL**: soluzioni consolidate e affidabili, con ampia community.  
- **HTML, CSS, JavaScript**: standard web, massima compatibilità e facilità d’uso.  

---

## 7. Analisi dei Rischi
| Rischio | Severità | Impatto | Probabilità | Mitigazione |
|---------|----------|---------|-------------|-------------|
| Errori integrazione frontend-backend | Medio | Malfunzionamenti, incoerenze nei dati | Media | Definizione interfacce, test incrementali |
| Perdita di dati | Alto | Perdita irreversibile informazioni | Bassa | Backup periodici e ridondanza |
| Sovraccarico server | Medio | Riduzione prestazioni | Bassa | Ottimizzazione query, scalabilità hosting |
| Ritardi nello sviluppo | Medio | Posticipo rilascio | Media | Pianificazione con Trello, suddivisione task |
| Vulnerabilità di sicurezza | Alto | Perdita riservatezza dati | Media | Validazione input, gestione permessi, controlli lato server |
| Difficoltà moduli AI | Alto | Funzionalità incomplete | Media | API esterne e servizi consolidati |
| Funzionalità non prioritarie incomplete | Medio | Limitazioni utente finale | Alta | Rilascio incrementale e aggiornamenti progressivi |
| Problemi UI/UX | Basso | Esperienza utente non ottimale | Bassa | Revisione UI/UX e testing continuo |

---

## 8. Team di Sviluppo – Alterra Studios
- **Strino – Backend Developer**: Progettazione DB, sicurezza dati.  
- **Hinceanu – Frontend Developer**: UI/UX.  
- **Fiorucci – Tester & Documentazione**: Debug, collaudo, documentazione tecnica.  
- **Tantucci – Project Manager**: Coordinamento, organizzazione attività, supporto tecnico.  

---

## 9. Strumenti di Supporto
- **GitHub**: gestione codice sorgente e versionamento.  
- **Trello**: pianificazione e monitoraggio attività.  

---

## 10. Esperienza di Sviluppo
### Difficoltà affrontate
- Integrazione frontend-backend.  
- Gestione sicura database.  
- Coordinamento lavoro di gruppo.  

### Competenze acquisite
- Consolidamento PHP, MySQL, HTML, CSS, JavaScript.  
- Uso strutturato GitHub e Trello.  
- Lavoro in team con ruoli chiari e definiti.  

### Miglioramenti futuri
- Progettazione più accurata database nelle fasi iniziali.  
- Introduzione test automatizzati.  
- Cura avanzata interfaccia grafica e user experience.  

---

## 11. Conclusioni
Il progetto **Didattix**, sviluppato dal team **Alterra Studios**, ha raggiunto con successo gli obiettivi prefissati, realizzando una piattaforma **funzionante, scalabile e predisposta per estensioni future**.  

L’esperienza ha rappresentato un’importante occasione di crescita **tecnica e organizzativa** per il team, con ricadute positive sia in ambito **accademico che professionale**.  

