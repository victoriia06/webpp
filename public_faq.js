$(function () {
  var speed = 200; // Скорость анимации
  var classOpened = 'opened'; // Класс для открытого вопроса

  $(document).ready(function () {
    // Обработка клика на вопрос
    $('.question__title').on('click', function () {
      var $answer = $(this).next('.question__text'); // Найти следующий элемент с ответом

      // Закрыть другие ответы
      if (!$answer.is(':visible')) {
        $('.question__text').slideUp(speed); // Скрыть все ответы
        $('.question__title').removeClass(classOpened); // Убрать класс "opened" со всех заголовков
      }

      // Открыть или закрыть текущий ответ
      $answer.slideToggle(speed);
      $(this).toggleClass(classOpened);
    });
  });
});