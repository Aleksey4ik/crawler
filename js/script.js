const comments = document.querySelector('.wrapper-comments');
const buttonForum = document.querySelector('.buttonForum');
const buttonReddit = document.querySelector('.buttonReddit');
const buttonSubmit = document.querySelector('input[type="submit"]');
const allInputText = document.querySelectorAll('input[type="text"]');

buttonSubmit.disabled = true;

buttonForum.addEventListener('click', function () {
  buttonSubmit.disabled = false;
  allInputText[0].value = 'https://forum.onliner.by/viewtopic.php?t=19991115';
  allInputText[1].value = '//ul[@class="b-messages-thread"]/li[@id]';
  allInputText[2].value = '//div[@class="content"]';
  allInputText[3].value = '//big[starts-with(@class,"mtauthor-nickname userid")]//a[starts-with(@class,"_name")]';
  if (comments.classList.contains('displayNone')) {
    comments.classList.remove('displayNone')
  }
});

buttonReddit.addEventListener('click', function () {
  buttonSubmit.disabled = false;
  allInputText[0].value = 'https://www.reddit.com/r/trance/comments/oio8i/ask_emma_hewitt_almost_anything/';
  comments.classList.add('displayNone');

});
