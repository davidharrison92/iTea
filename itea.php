<?php
     include("db/db_query.php");
?>

<html>
    <head>
        <title>iTea | IS Team</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="iteastyles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
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
                    <br>
                    <div class="alert alert-danger" role="alert"><strong>COVID-19:</strong> Remain at home. Make your own tea.</div>

                        <table class="table table-hover">
                            <?php foreach($team_drinks as $person): ?>
                                <tr>
                                    <td class="table-styling-first">
                                        <?php if(isset($person["label"])): ?>
                                            <span class="label label-primary">
                                                <?php echo $person["label"] ?>
                                            </span>&nbsp;
                                        <?php endif;?>
                                        <strong><?php echo $person["name"]; ?></strong>
                                    </td>
                                    <td><?php echo $person["work_drink"]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div><!-- end tea tab -->


                    <div role="tabpanel" class="tab-pane" id="beer">
                    <br>
                     <div class="alert alert-danger" role="alert"><strong>COVID-19:</strong> Do not go to the pub. Remain at home. Drink yourself through quarantine.</div>
                        <table class="table table-hover">
                            <?php foreach($team_drinks as $person): ?>
                                <tr>
                                    <td class="table-styling-first">
                                        <?php if(isset($person["label"])): ?>
                                            <span class="label label-primary">
                                                <?php echo $person["label"] ?>
                                            </span>&nbsp;
                                        <?php endif;?>
                                        <strong><?php echo $person["name"]; ?></strong>
                                    </td>
                                    <td><?php echo $person["pub_drink"]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div> <!-- end beer tab -->
                </div> <!-- end tab content -->
            </div><!-- end tab row -->
        </div>
    </body>
</html>
