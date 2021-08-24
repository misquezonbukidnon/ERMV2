<!DOCTYPE html>
<html>

<head>
  @livewireStyles
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>ERM LGU QUEZON</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/icon-set/style.css">
  <link rel="stylesheet" href="./assets/vendor/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="./assets/vendor/chart.js/dist/Chart.min.css">
  <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./assets/vendor/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="./assets/vendor/flatpickr/dist/flatpickr.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="./assets/css/theme.min.css">
</head>

<body>
  <!-- Navigation -->
  <livewire:component.navigation.header />

  <div style="margin-top: 6rem">
    <!-- Livewire Components -->
    @yield('content')
  </div>

  @livewireScripts
  <script src="./assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- End Create a new user Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js"></script>
  <script src="./assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
  <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
  <script src="./assets/vendor/select2/dist/js/select2.full.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js.extensions/chartjs-extensions.js"></script>
  <script src="./assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
  <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>
  <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <script src="./assets/js/hs.datatables.js"></script>
  <script src="./assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="./assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
  <script src="./assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
  <script src="./assets/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="./assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <script src="./assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
  <script src="./assets/js/hs.flatpickr.js"></script>
  <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  <script src="./assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="./assets/vendor/table-edits/build/table-edits.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <script src="./assets/vendor/appear/dist/appear.min.js"></script>
  <script src="./assets/vendor/hs-counter/dist/hs-counter.min.js"></script>
  <script src="./assets/js/hs.chartjs.js"></script>
  <script src="./assets/js/hs.dropzone.js"></script>


  <!-- Home Datatable With Filters -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      var datatable = $.HSCore.components.HSDatatables.init($('#columnSearchDatatable'));

      $('#column1_search').on('keyup', function() {
        datatable
          .columns(0)
          .search(this.value)
          .draw();
      });

      $('#column2_search').on('change', function() {
        datatable
          .columns(1)
          .search(this.value)
          .draw();
      });

      $('#column3_search').on('change', function() {
        datatable
          .columns(2)
          .search(this.value)
          .draw();
      });

      $('#column4_search').on('change', function() {
        datatable
          .columns(3)
          .search(this.value)
          .draw();
      });
    });
  </script>

  <!-- <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      var datatable = $.HSCore.components.HSDatatables.init($('#officedatatable'));

      $('#officeSearch').on('keyup', function() {
        datatable
          .columns(0)
          .search(this.value)
          .draw();
      });
    }); -->
  </script>

  <!-- Import File -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
      // =======================================================
      $('.js-dropzone').each(function() {
        var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
      });
    });
  </script>

  <!-- Unfold Function ??? Find this -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF UNFOLD
      // =======================================================
      $('.js-hs-unfold-invoker').each(function() {
        var unfold = new HSUnfold($(this)).init();
      });
    });
  </script>

  <!-- Counters &&  Password && Validations -->
  <script>
    // $(document).on('ready', function() {
    //   // INITIALIZATION OF COUNTERS
    //   // =======================================================
    //   $('.js-counter').each(function() {
    //     var counter = new HSCounter($(this)).init();
    //   });
    // });

    $(document).on('ready', function() {
      // initialization of Show Password
      $('.js-toggle-password').each(function() {
        new HSTogglePassword(this).init()
      });

      // initialization of form validation
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this));
      });
    });
  </script>

  <!-- Date Picker -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF FLATPICKR
      // =======================================================
      $('.js-flatpickr').each(function() {
        $.HSCore.components.HSFlatpickr.init($(this));
      });
    });
  </script>

  <!-- form && and files -->
  <script>
    // initialization of file attach
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });

    // initialization of step form
    $('.js-step-form').each(function() {
      var stepForm = new HSStepForm($(this), {
        finish: function() {
          $("#addUserStepFormProgress").hide();
          $("#addUserStepFormContent").hide();
          $("#successMessageContent").show();
        }
      }).init();
    });

    // initialization of masked input
    $('.js-masked-input').each(function() {
      var mask = $.HSCore.components.HSMask.init($(this));
    });

    // initialization of select2
    $('.js-select2-custom').each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });

    // initialization of add input filed
    $('.js-add-field').each(function() {
      new HSAddField($(this), {
        addedField: function() {
          $('.js-add-field .js-select2-custom-dynamic').each(function() {
            var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
          });
        }
      }).init();
    });
    // Datatable Edit Office routes - /office
    $(document).on('ready', function() {
      // INITIALIZATION OF EDITABLE TABLE
      // =======================================================
      $('.js-editable-table tbody tr').editable({
        keyboard: true,
        dblclick: true,
        button: true,
        buttonSelector: '.js-edit',
        maintainWidth: true,
        edit: function(values) {
          $('.js-edit .js-edit-icon', this).removeClass('tio-edit').addClass('tio-done');
          $(this).find('td[data-field] input').addClass('form-control form-control-sm');
        },
        save: function(values) {
          $('.js-edit .js-edit-icon', this).removeClass('tio-done').addClass('tio-edit');
        },
        cancel: function(values) {
          $('.js-edit .js-edit-icon', this).removeClass('tio-done').addClass('tio-edit');
        }
      });
    });
  </script>
  <!-- Office Datatable Search -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      var datatable = $.HSCore.components.HSDatatables.init($('#officedatatable'), {
        language: {
          zeroRecords: '<div class="text-center p-4">' +
            '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
            '<p class="mb-0">No data to show</p>' +
            '</div>'
        }
      });

      $('#officeinputSearch').on('mouseup', function(e) {

        var $input = $(this),
          oldValue = $input.val();

        if (oldValue == "") return;

        setTimeout(function() {
          var newValue = $input.val();

          if (newValue == "") {
            // Gotcha
            datatable.search('').draw();
          }
        }, 1);
      });
    });
  </script>



  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>

</html>