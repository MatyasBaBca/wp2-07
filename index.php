< !DOCTYPE html>
<html>
<head>
<style>
.completed {
    background-color: green;
}

.incomplete {
    background-color: red;
}
</style>

<title></title>
</head>
<body>
<?php 
//wp2-01 - 7
$classes=array('2C'=> array('projects'=> array("wp2-01",
            "wp2-02",
            "wp2-03",
            "wp2-04",
            "wp2-05",
            "wp2-06",
            "wp2-07",
        ),
        'user'=> array("jdoe999",
            "MatyasBaBca"
        )),
    '3C'=> array('projects'=> array("wp5-01",
        ),
        'user'=> array('kristian33'
        )));

foreach ($classes as $class=> $classvalue) {
    ?><h1><?php echo $class;

    ?></h1><?php foreach ($classvalue['user'] as $user) {
        echo $user ."<br>";

        foreach ($classes as $class=> $classvalue) {
            ?><h1><?php echo $class;

                foreach ($classvalue['projects'] as $project) {
                    echo $project . "<br>";

                    foreach ($classes as $class=> $classvalue) {

                        $final .="<h1> $class </h1>";

                        foreach ($classvalue['user'] as $user) {
                            //echo $user ."<br>";
                            $final .="<b>$user</b> <br>";

                            foreach ($classvalue['projects'] as $project) {
                                //  echo $project ."<br>";


                                $URL="https://github.com/$user/$project";
                                $content = @file_get_contents($URL);



                                // echo $user;
                                if ( !empty($content)) {
                                    $final .="$project: Ano <br>";
                                }

                                else {
                                    $final .="$project: Ne <br>";
                                }

                            }

                        }

                    }
                

                    echo $final;
                    ?>
<div class="complete">wp2-06 - ano</div>
<div class="incomplete">wp2-07 - ne</div>


</body>
</html>