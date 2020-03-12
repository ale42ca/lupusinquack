<?php
//beecky

// webhook token e update che ci permettono di interagire con il bot
$web ="https://api.telegram.org/bot";
$token="827826663:AAEZ--JmE-aE5VmNSoMoZ0OLTiFe_RqGEDM";
$completo="https://api.telegram.org/bot".$token;
$updates=file_get_contents("php://input");
$update=json_decode($updates, true);

if(!$update){
  exit();
}
//msg
$messaggio=$update['message'];
$message_id=$update['message']['message_id'];
$testo=$messaggio['text'];
//utente
$utente=$messaggio['chat']['id'];
$nomeutente=$messaggio['chat']['first_name'];
$username=$messaggio['from']['username'];

//query msg
/*
$query = $update['callback_query'];
$queryid = $query['id'];
$queryUserId = $query['from']['id'];
$queryusername = $query['from']['username'];
$querydata = $query['data'];
$querymsgid = $query['message']['message_id'];
$querymsg = $query['message'];
*/
//data
function mandamessaggiutente($utente, $msg)
{
  $url = $GLOBALS[completo]."/sendMessage?chat_id=".$utente."&text=".urlencode($msg);
	file_get_contents($url);
}
// metodo per mandare un msg al canale
function mandamessaggigruppo($msg)
{
  $utente = "";
  $url = $GLOBALS[completo]."/sendMessage?chat_id=".$utente."&text=".urlencode($msg);
  file_get_contents($url);
}

function mandamessaggigruppo($msg)
{
  $utente = "";
  $url = $GLOBALS[completo]."/sendMessage?chat_id=".$utente."&text=".urlencode($msg);
  file_get_contents($url);
}


switch($testo){
  case '/start':
	mandamessaggiutente($utente, "Benevenuto a lupus in quack");
    break;
  case '/lupus':
	invitogruppo("Giochiamo");
  sleep(100);
  $partecipanti=partecipanti();
  if()
  break;
  case '/end':
  deletegame();
  exit();
  break;
}
    

	class Game {
		//proprietà
		private $name = "";


		//costruttore
		public function __construct($name)
		{
			//inizializzazione della proprietà $name
			$this->name = $name;
		}
		//metodi
		public function getName() {
			//$this rappresenta l'oggetto che sarà costruito a runtime
			return $this->name;
		}
	}
	//istanzia un nuovo oggetto della classe Person
	$customer1 = new person("Giuseppe Rossi");
	echo "Cliente: ".$customer1->getName()."<br>";
	//istanzia un nuovo oggetto della classe Person
	$customer2 = new person("Guglielmo Cancelli");
	echo "Cliente: ".$customer2->getName()."<br>";
?>
