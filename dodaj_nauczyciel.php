<html>
 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
  <script>
function goBack() {
  window.history.back();
}
</script>
 </head>
 <body>
  <h1>Dodawanie do bazy</h1>
  <form method="get" action="insert_nauczyciel.php">
   <table border="0">
      <tr><td>klasa</td><td><input name="klasa"></td></tr>
      <tr><td>temat</td><td><input name="temat"></td></tr>
      <tr><td>tresc</td><td><input name="tresc"></td></tr>
      <tr><td>data_i_godzina</td><td><input name="data_i_godzina"></td></tr>
      <tr><td>data_i_godzin_oddania</td><td><input name="data_i_godzina_oddania"></td></tr>
      <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
   </table>
  </form>
  <button onclick="goBack()">Go Back</button>
 </body>
</html>


