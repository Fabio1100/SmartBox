<?php
  // Connessione al DataBase
  require '../conn/conn.php';

  // Avvio sessione
  session_start();

  // Recupero i dati dalla form
  // Id dell'aula sospesa da cancellare
  if(isset($_GET['id']))
    $id_aula = $_GET['id'];

  // Data di inizio della sospensione
  if(isset($_GET['data']))
    $datai = $_GET['data'];

  // Costruisco la query per eliminare la sospensione
  $query="DELETE FROM sospendiAula
          WHERE idAula = $id_aula AND sospendiDa = '$datai'";

  // Esecuzione query
  if($conn->query($query))
    echo "OK";
?>
