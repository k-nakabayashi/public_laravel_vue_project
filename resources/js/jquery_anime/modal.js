$(".js-Modal__btn--register").on("click", function () {
  $(".js-Modal__cover").show();
  $(".c-modal-Form.login ").hide();
  $(".c-modal-Form.repass").hide();

  $(".c-modal-Form.register ").toggle();
});

$(".js-Modal__btn--login").on("click", function () {
  $(".js-Modal__cover").show();
  $(".c-modal-Form.register ").hide();
  $(".c-modal-Form.repass").hide();

  $(".c-modal-Form.login ").toggle();
});

$(".js-Modal__btn--repass").on("click", function () {
  $(".js-Modal__cover").show();
  $(".c-modal-Form.register ").hide();
  $(".c-modal-Form.login").hide();

  $(".c-modal-Form.repass").toggle();
});


$(".js-Modal__close").on("click", function () {
  $(".c-modal-Form ").hide();
  $(".js-Modal__cover").hide();
});