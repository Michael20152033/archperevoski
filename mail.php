
<?
include('sms.php');

$mysite='evak29.ru';  // Сайт на котором будет размещена форма (пишем именно в таком формате без http:// и www)
$mytel='79025073588';  //89045124323  //Телефон куда будет приходит SMS-уведомление о необходимости перезвонить, пишем именно в таком формате (без плюсов, скобок, в начале 7ка)

$telnumber=$_POST['phone'];
$name=$_POST['name'];
$place = $_POST['place'];

$mystrlen=strlen($telnumber);
if ($mystrlen>20)
{
	echo 'error';
	exit;
}
$mymessage='C сайта: '.$mysite.' '.$name.' '.$telnumber.' '.$place;
$mymessage=iconv("utf-8", "windows-1251", $mymessage);

list($sms_id, $error)=Sms::send($mytel, $mymessage, 'rolexus', 1);

echo $ok;

?>