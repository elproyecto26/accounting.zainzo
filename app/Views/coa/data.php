<?= $this->extend('layout/coa_layout') ?>

<?= $this->section('content') ?>
<h3>Daftar Akun</h3>
<div class="row mt-5">
  <div class="col" id="coaDataFeedback"></div>
</div>
<table class="table table-sm" id="coaData">
  <thead>
    <tr>
      <th>Kode Akun</th>
      <th>Nama Akun</th>
      <th>Tipe Akun</th>
      <th>Akun Transaksi</th>
      <th>Standar Debit / Kredit</th>
      <th>Saldo</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
<script type="text/javascript">
let DataCOA = function () {
  let data = {};

  let $tableCOAData = $('table#coaData');
  let $divCOADataFeedback = $('div#coaDataFeedback');

  data.loadCOAData = function () {
    $.ajax({
      method: 'GET',
      url: '<?= api_url('accounting/coa') ?>',
      beforeSend: function () {
        $divCOADataFeedback.empty();
        $divCOADataFeedback.append(`
          <div class="spinner-grow spinner-grow-sm text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        `);
      },
      success: function (response) {
        $divCOADataFeedback.empty();
        response.data.forEach(function (item, index) {
          item.is_transaction = item.is_transaction == 1 ? 'Ya' : 'Tidak';
          item.default_d_c = item.default_d_c == 1 ? 'Debit' : 'Kredit';
          if (item.coa_parent_id == null) {
            item.coa_code = `<b>${item.coa_code}</b>`;
            item.coa_name = `<b>${item.coa_name}</b>`;
            item.coa_type = `<b>${item.coa_type}</b>`;
            item.is_transaction = `<b>${item.is_transaction}</b>`;
            item.default_d_c = `<b>${item.default_d_c}</b>`;
          }
          $tableCOAData.children('tbody').append(`
            <tr>
              <td>${item.coa_code}</td>
              <td>${item.coa_name}</td>
              <td>${item.coa_type}</td>
              <td>${item.is_transaction}</td>
              <td>${item.default_d_c}</td>
              <td></td>
            </tr>
          `);
        });
      },
      error: function () {
        $divCOADataFeedback.empty();
        $divCOADataFeedback.append(`
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Error saat mengambil Semua Akun.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        `);
      }
    });
  };

  return data;
}
let dataCOA = DataCOA();
dataCOA.loadCOAData();
</script>
<?= $this->endSection('content') ?>