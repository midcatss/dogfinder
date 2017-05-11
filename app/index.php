<?php
  $db = new PDO ('mysql:host=localhost;dbname=dogfinder',"root","");
?>
  <?php include 'module/header.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'module/left.php'; ?>
        <div class="col-lg-10 sort">
          <div class="col-lg-3">
            <span class="sortTick">Утерянные предметы</span>
            <span class="amountTick">222 всего</span>
          </div>
          <div class="col-lg-4 col-lg-offset-5">
            <span class="sortDate">Сортировать: <a href="#">Новые</a></span>
            <button type="button" name="button" class="add" data-toggle="modal" data-target="#myModal">Создать</button>
            <?php include 'module/modal.php'; ?>
          </div>
        </div>

          <?php
            $result = $db->query("SELECT * FROM Items");
            $rowsArray = $result->fetchAll();

            foreach ($rowsArray as $key => $value) {
            echo '
            <div class="col-lg-4">
          <div class="cards">
            <h4>'.$value['title'].'</h4>
            <span class="cardsStatus"></span>
            <p>'.$value['description'].'</p>
            <div class="cardsBar">
              <span><img src="images/location.svg" alt="location">'.$value['location'].'</span>
            </div>
          </div>
        </div>
        ';
}
    ?>
      </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
