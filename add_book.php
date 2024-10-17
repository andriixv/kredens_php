<!DOCTYPE html>
<html lang="uk">
<head>
    <?php include 'include-head.php';?>
</head>
<body>
    <?php include 'include-navbar.php';?>
    <?php include 'include-calendar.php';?>
    <section class="past-events">
    <div class="container">
      <div class="section-header">
        <h1><i class="fas fa-book"></i> Додавання нової книги в каталог</h1>
      </div>
    </div>
    <div class="container">
      <form class="book-form" action="">
        <div class="first-div">
          <label><input type="text" placeholder="Назва книги" autofocus /></label>

          <!--Для вибору жанру можна зробити селектор або галочки-->
          <label><input type="text" placeholder="Жанр" required /></label>
          <label><input type="text" placeholder="Автор" required /></label>
          <label>
            <select name="Lang" id="Lang" required>
              <option value="All" selected disabled hidden>
                Оберіть мову книги
              </option>
              <option value="Ukr">Українська</option>
              <option value="Eng">Англійська</option>
              <option value="Pol">Польська</option>
            </select>
          </label>
          <label><input type="number" placeholder="Рік видання" required /></label>
          <label><input type="text" placeholder="Видавець" required /></label>
          <label><input type="text" placeholder="Серія" required /></label>
          <label><input type="text" placeholder="Палітурка" required /></label>
          <label><input type="number" placeholder="Кількість книг в бібліотеці" required /></label>
          <label><input type="number" placeholder="Наклад" required /></label>
          <label><input type="text" placeholder="Розмір книги" required /></label>
          <label><input type="text" placeholder="номер ISBN" /></label>
          <label>
            <textarea id="opus" rows="4" cols="50" placeholder="Короткий опис книги" required></textarea>
          </label>
          <label><input type="text" placeholder="Анотація" required /></label>
          <input class="btn" type="submit" value="Надіслати" />
        </div>
        <div class="second-div">
          <label class="uploadBtn">
            <span class="material-symbols-rounded" id="add-cover">add_a_photo Обкладинка</span>
            <span class="material-symbols-rounded" id="edit-cover">edit Редагувати</span>
            <img id="bookImage" src="#" alt="book image"/>
            <input type="file" id="bookImg" name="img" accept="image/*" onchange="showBook()" />
          </label>
        </div>

      </form>
    </div>
  </section>
    <?php include 'include-poll.php';?>
    <?php include 'include-footer.php';?>
    <script src="index.js"></script>
</body>
</html>