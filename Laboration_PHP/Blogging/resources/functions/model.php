<?php

//Simple array for topics - Övning 4 (http://porkforge.mardby.se/index.php?title=PHP_Laboration_3_-_Array_och_loopar#.C3.96vning_4)
//$model = array("Första inlägget","Snart är det vår","Robin Presenterar sig","Senaste inlägget")

//2D Associative array for full posts - Övning 9 (http://porkforge.mardby.se/index.php?title=PHP_Laboration_3_-_Array_och_loopar#.C3.96vning_9_-_g.C3.B6r_2D_associative_array)

//anslutnigsuppgifter till databasen  
$host = 'localhost'; 
$dbname = 'blogg'; 
$user = 'admin'; 
$password = '';

//skapar attributet till PDO-obejekt  

$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

//inställning för databas-anslutning

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";


// skapar  PDO-obejekt  
$pdo = new PDO("mysql:dbname=$dbname;host=$host", $user, $password,$attr);

//ansluter till databsen och använder frågor  

if($pdo) {
$model = array ();
echo "<pre>";
foreach($pdo->query('SELECT * FROM posts') as $row) {
print_r($row); }
echo "</pre>";
    
    
} else { print_r($pdo->errorInfo());
}


//testar vår anslutning 


if($pdo) {
echo "Database connected!";
    
echo "<pre>";
  foreach($pdo->query('SELECT * FROM post') as $row)
  {  
      
    
  print_r($row); }
echo "</pre>";
    
$model = array(
      'ID' => array(
    'slug'=> 'slug',
    'title'=>'headline',
    'author'=>'usearID',
    'date'=>'creation_time',
    'text'=> 'text'
    
    
} else { print_r($pdo->errorInfo());
}



$model += array(
    '0' => array(
        'slug' => 'forsta-inlagget',
        'title' => 'Första inlägget',
        'author' => 'Gugge',
        'date' => '2015-01-01',
        'text' => 'Här kommer det första inlägget i sin helhet. Välkommen till Labb 3! Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
    ),
    '1' => array(
        'slug' => 'snart-ar-det-var',
        'title' => 'Snart är det vår',
        'author' => 'Gugge',
        'date' => '2015-02-24',
        'text' => 'Snart är det vår! Då övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
    ),
    '2' => array(
        'slug' => 'robin-presenterar-sig',
        'title' => 'Robin presenterar sig',
        'author' => 'Robin',
        'date' => '2015-02-25',
        'text' => 'Robin är en trevlig prick som gärna övar på PHP för att som du bli en duktig webbserverprogrammerare. Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
    ),
    '3' => array(
        'slug' => 'senaste-inlagget',
        'title' => 'Senaste inlägget',
        'author' => 'Robin',
        'date' => '2015-02-26',
        'text' => 'Här kommer senaste inlägget i sin helhet. Välkommen till Labb 3! Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
    )
);

echo "<pre>";
foreach($pdo->query('SELECT * FROM ernst') 
as $row) {
print_r($row);
echo "<pre>";    
?>


