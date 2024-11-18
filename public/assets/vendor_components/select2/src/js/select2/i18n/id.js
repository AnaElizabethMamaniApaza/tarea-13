define(function () {

  return {
    errorLoading: function () {
      return 'No se permite acceder a los datos.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      return 'Eliminar' + overChars + ' Letra';
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Ingresar' + remainingChars + ' Más letras';
    },
    loadingMore: function () {
      return 'Obteniendo datos...';
    },
    maximumSelected: function (args) {
      return 'Solo puede seleccionar' + args.maximum + ' Opción';
    },
    noResults: function () {
      return 'No hay datos que coincidan';
    },
    searching: function () {
      return 'Buscando...';
    }
  };
});
