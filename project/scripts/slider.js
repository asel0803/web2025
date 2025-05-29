const sliders = Array.from(document.querySelectorAll('.slider'));
sliders.forEach((slider) => {

  const nextButton = slider.querySelector('.next-button');
  const backButton = slider.querySelector('.back-button');

  const blockPhotoNumber = slider.querySelector('.slider__photo-number');
  const photoNumber = slider.querySelector('.slider__photo-number-text');

  const slides = Array.from(slider.querySelectorAll('.contentpost__photo-size'));//выхватывает картинки из слайдера
  const slideCount = slides.length;
  let indexOfimages = 0;

  nextButton.addEventListener('click', goAhead);
  backButton.addEventListener('click', goBack);

  function goAhead() {
    indexOfimages = (indexOfimages + 1) % slideCount;
    updateSlider(); //% остаток при делении не должен быть больше делителя 9
  }

  function goBack() {
    indexOfimages = (indexOfimages - 1 + slideCount) % slideCount; // + slidecount чтобы остаток не был отрицательным, чтобы закольцеваться. -1 +10=9 9/10=0(ост 9) переходим к 9 фотке
    updateSlider();
  }

  function updateSlider(){
      photoNumber.textContent = `${indexOfimages+1}/${slideCount}`; //обр кавычки, чтобы встравить элемент в
      slides.forEach((slide, index) => {
      if (index === indexOfimages) {
        slide.style.display = 'block';
      } else {
        slide.style.display = 'none';
      }
      }); //пробегаем по всем картинкам, если индекс эл массива картинок= равен настоящему, то эоемент делаем дисплей блок, ост нам
  }

  updateSlider();
})
//документ класс для взаимодействия с хтмл объекты()

