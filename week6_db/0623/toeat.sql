create database toeat;


CREATE TABLE menu (
	`id` int not null auto_increment,
    `date` date not null,
    `name` VARCHAR(255) not null,
    `price` int not null,
    primary key(id)
)
;


$sql = "insert into menu (date, name, price) values (current_date, '$name','$price')";

$result= mysqli_query($conn, $sql);

if($result)
	header('location: index.php');



if(isset($_POST['cancel']))
	header('location: index.php');


mysqli_set_charset($conn,"UTF8");

$id = $_GET['id'];

$result = mysqli_query($conn, $sql);


	