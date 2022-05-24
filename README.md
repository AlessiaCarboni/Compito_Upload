# Compito_Upload
Compito per 25/05/2022
## Style ##
- Imposto sfondo di colore rosso
- Imposto il paragrafo h1 (dimensione maggiore) con font Times New Roman e faccio la stessa cosa ad ogni riquadro (legend).
--------------------------
```python
## Body ##
- Riga 22: Eseguo la connessione alla pagina php "Registrazione.php" in modo che i dati inviati non siano visibili sull'URL, grazie al metodo POST applicato al form.
- Riga 24: Apro il tag fieldset, che serve per suddividere il testo in paragrafi, i quali hanno ognuno un proprio titolo specifico.
- Riga 25: Assegno il titolo al paragrafo tramite il tag: <legend>.
  - Successivamente, creo vati pulsanti e caselle di testo tramite cui invieremo i dati inseriti alla pagina php.
  Utilizzo un input di tipo "text" oer inserire nome e username, che sono delle stringhe.
  Utilizzo un input di tipo "email" per l'inserimento dell'email, che controllerà la correttezza del dato inserito considerando anche la presenza della chiocciola.
  Utilizzo un input di tipo "date" per l'inserimento della data di nascita dell'utente, che potrà accedere anche ad un calendario in cui selezionare la data
  Utilizzerò poi un input di tipo "password" per l'inserimento della password, in modo che l'utente possa digitarla in modo privato (non verrà letto il testo digitato perchè sarà sottoforma di pallini per mantenere la privacy).
  - Chiudo poi il riquadro creato con il fieldset.
  - Riga 42: Apro un altro riquadro per i termini e le condizioni
  - Riga 43: Assegno il titolo al riquadro creato
  Inserisco poi due input di tipo "checkbox" che permetterà all'utente di selezionare una risposta a scelta multipla, per accettare le condizioni e dare il consenso alle pubblicità.
 - Chiudo il riquadro
  - Apro un nuovo riquadro per la selezione degli argomenti di preferenza
  - Creo quindi un input di topo checkbox in modo da creare una scelta multipla tra vari argomenti di preferenza per l'utente.
  - Chiudo il riquadro
  - Infine creo poi due pulsanti:
  Creo input di tipo "submit" per l'invio dei dati
  Creo input di tipo "reset" per resettare tutti gli inserimenti una volta inviati i dati inseriti
  - Chiudo la pagina html
  ```
