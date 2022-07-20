<html>
 <head>
</head>
<body>
    <script type="text/javascript">
    let n;
    n=prompt("entre le valeur n");
    windo.location="recibe.php?nom"+n;
    </script>
    <?php  $nomber=$_Request['nom'];
    $somme=0;
      for($i=1;$i<=$nomber;$i++)
      {
          $somme=$somme+$i;
      }
      echo"$somme"; ?>
</body>
</html>