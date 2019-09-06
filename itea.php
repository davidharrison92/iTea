<?php
   
     include("db_config.php");
   
   //Build an array with the data

     $team_drinks = array();



     $fetchqry = "SELECT name, work_drink, pub_drink FROM team order by name ASC"; 
     $result = mysqli_query($conn,$fetchqry);

    $rows = array();
    while($row = $result->fetch_assoc()){
        $team_drinks[] = $row;
    }

    var_dump($team_drinks[2]);

    

     ?>


<html>
    <head>
        <title>iTea | IS Team</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
            <!-- <table class="table table-hover"> -->
                        

                        <? foreach($team_drinks as $person) {
                            echo $person["name"];
                            echo $person["work_drink"];
                            ?> 
                            <!-- <tr><td><strong><? echo $person["name"]; ?></strong></td><td><? echo $person["work_drink"]; ?></td></tr> -->
                            <?
                        }
                     ?>
            <!-- </table> -->


        <div class="container">
            <div class="row">
                <h1>IS Tea Round Cheat Sheet</h1>
            </div>
            <div class="row">
              <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#Tea" aria-controls="Tea" role="tab" data-toggle="tab">Professionally <span class="glyphicon glyphicon-briefcase"aria-hidden="true"></span></a>
                    </li>
                    <li role="presentation">
                        <a href="#beer" aria-controls="beer" role="tab" data-toggle="tab">Casually <span class="glyphicon glyphicon-glass"aria-hidden="true"></span></a>
                    </li>
                </ul>
              <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Tea">
                        <table class="table table-hover">
                        

                        <? foreach($team_drinks as $person) {
                            var_dump($person);
                            ?> 
                            <tr><td><strong><? echo $person["name"]; ?></strong></td><td><? echo $person["work_drink"]; ?></td></tr>
                            <?
                        }
                     ?>

                            
                        </table>
                    </div><!-- end tea tab -->
                    <div role="tabpanel" class="tab-pane" id="beer">
                        <table class="table table-hover">
                            <tr><td><strong>Nigel</strong></td><td> Bitter, something like a Doom Bar.</td></tr>
                            <tr><td><strong>Craig</strong></td><td> "I have a wife."</td></tr>
                            <tr><td><strong>Dave</strong></td><td> HPA, else some lager like San Miguel. Estrella in the Robin Hood. </td></tr>
                            <tr><td><strong>Luke</strong></td><td> Bitter. If there's one with an amusing name, go for that.</td></tr>
                            <tr><td><strong>Gary</strong></td><td> Usually Guinness. After playing badders, a refreshing pint of Premium Lager.</td></tr>
                            <tr><td><strong>Roy</strong></td><td> Rarely comes out. :( </td></tr>
                            <tr><td><strong>Chris</strong></td><td> Usually Guinness. Also enjoys ales.</td></tr>
                            <tr><td><strong>Dan</strong></td><td> Lager in winter, Cider in Summer</td></tr>
                            <tr><td><strong>Alex</strong></td><td> Cider or Cider Shandy - if he's feeling like a pansy. <span class="glyphicon glyphicon-exclamation-sign"aria-hidden="true"></span> Never Beer  <span class="glyphicon glyphicon-exclamation-sign"aria-hidden="true"></span> </td></tr>
                            <tr><td><strong>Suki</strong></td><td> Rarely comes out, beer, impossible to predict.</td></tr>
                            <tr><td><strong>Mila</strong>  </td><td> Half a lager or a Diet Coke.</td></tr>
                            <tr><td><strong>Jenny</strong></td><td> Alcohol-free lager, or Virgin Mary, or Lime &amp; Soda</td></tr>
                        </table>
                    </div> <!-- end beer tab -->
                </div> <!-- end tab content -->
            </div><!-- end tab row -->
        </div>
    </body>
</html>
