<?php
// Get PDF filename safely
$file = isset($_GET['file']) ? basename($_GET['file']) : '';

$pdfPath = "assets/noa/" . $file;

// check if file exists
if (!file_exists($pdfPath)) {
    die("PDF not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notice of Award</title>
<link rel="icon" type="image/png" href="assets/images/seal2.png">

<style>
/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html, body{
    width:100%;
    height:100%;
    overflow:hidden;
    background:#f5f0e6;
    font-family: Arial, sans-serif;
}

/* FULLSCREEN RESPONSIVE PDF */
.pdf-container{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100dvh; /* dynamic viewport height (best for mobile) */
}

/* PDF FRAME */
.pdf-container iframe{
    width:100%;
    height:100%;
    border:none;
}

/* EXTRA MOBILE FIX */
@supports (-webkit-touch-callout: none) {
    .pdf-container{
        height:100vh;
    }
}
</style>
</head>

<body>

<div class="pdf-container">
    <iframe src="<?php echo $pdfPath; ?>"></iframe>
</div>

</body>
</html>