<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Πλοηγός - ΙΚΑ</title>
        <?php
            include("refs.html")
        ?>

    </head>
<!-- Latest compiled and minified CSS -->
<body>
<?php
    include("navbar.html");
?>

<!-- <br></br> -->

<div class="container">
    <div class="row">
        <h3>Πλοηγός</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item active">Πλοηγός</li>
        </ol>
    </div>

    <div class="row" id="workers-grid">

        <div class="col-sm-12">
            <h3>Σελίδες:</h3>
            <ul>
                <li><a href="index.php"><strong>Αρχική</strong></a></li>
                    <ul><li><a href="ergazomenoi.php">Εργαζόμενοι</a></li></ul> <ul><li><a href="ensyma.php">Υπολογισμός ενσήμων </a></li><li><a href="bebaiosh_ergasias.php">Βεβαίωση εργασίας</a></li><li><a href="aitisi_asfalisis_teknou.php">Αίτηση ασφάλισης τέκνου</a></li></ul>

                    <li><a href="ergodoths.php"><strong>Εργοδότες</strong></a></li>
                    <ul><li><a href="ensyma.php">Υπολογισμός ενσήμων </a></li><li><a href="upologismos_eisforon.php">Υπολογισμός εισφορών</a></li><li><a href="#">Αίτηση ασφάλισης τέκνου</a></li></ul>


                    <li><a href="syntaksiouxoi.php"><strong>Συνταξιούχοι</strong></a></li>
                    <ul><li><a href="bebaiosh_suntaksewn.php">Βεβαίωση Συντάξεως</a></li><li><a href="aitisi_suntaksiodotikou_boithimatos.php">Αίτηση Καταβολής Συνταξιοδωτικού Βοηθήματος</a></li><li><a href="upologismos_dwrou.php">Υπολογισμός δώρου εορτών</a></li></ul>

                    <li><a href="#"><strong>Άτομα με ειδικές ανάγκες</strong></a></li>
                    <li><a href="genikes_plhrofories.php"><strong>Γενικές Πληροφορίες</strong></a></li>

                    <ul><li><a href="#">Συχνές Ερωτήσεις</a></li><li><a href="aitisi_suntaksiodotikou_boithimatos.php">Επικοινωνία & Δικτύο Καταστημάτων</a></li></ul>




            </ul>
        </div>

    </div>
</div>

<?php
    include("footer.html");
?>


</body>
</html>
