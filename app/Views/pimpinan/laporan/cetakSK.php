<?= $this->extend('templates/header') ?>
<!-- Content Start -->
<div class="content">
    <?= $this->section('content') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
    var max_group = 50;
    var add_group = $('.add_group');
    var group_wrapper = $('.group_wrapper');




    var max_field = 50;
    var add_button = $('.add_button');
    var wrapper = $('.field_wrapper');




    var html_group = '' +
        '<div class="group_wrapper">' +
        '<a href="javascript:void(0);" class="remove_group btn btn-sm btn-danger pull-right"><i class="fa fa-minus"></i> remove group</a>' +
        '<table id="itemTable" class="table">' +

        '<thead>' +
        '<tr>' +

        '<th>Jabatan</th>' +
        '<th>Nama</th>' +
        '<th>Action</th>' +
        '</tr>' +
        '</thead>' +
        '<tbody class="field_wrapper">' +

        '<tr class="item-group">' +
        '<td><input type="text" class="form-control text-light" placeholder="Divisi"></td>' +
        '</tr>' +

        '<tr class="item">' +
        '<td><input type="text" class="form-control text-light" placeholder="Koordinator"></td>' +
        '<td><input type="text"class="form-control text-light" placeholder="Nama"></td>' +
        '</tr>' +
        '<tr class="item">' +
        '<td><input type="text" class="form-control text-light" placeholder="Sekretaris Koordinator"></td>' +
        '<td><input type="text"class="form-control text-light" placeholder="Nama"></td>' +
        '</tr>' +
        '<tr class="item">' +
        '<td><input type="text" class="form-control text-light" placeholder="Anggota"></td>' +
        '<td><input type="text"class="form-control text-light" placeholder="Nama"></td>' +
        '<td><a href="javascript:void(0);" class="add_button btn btn-sm btn-primary" title="Add field"><i class="fa fa-plus"></i></a></td>'+
'</tr>'+
        '</tr>' +
        '</tbody>' +
        '</table>' +
        '</div>';

    var html_fields = '' +
        '<tr class="item">' +
        '<td> <div class="form-group mb-0"> <input type="text" class="form-control text-light" placeholder="Anggota"> </div> </td> ' +
        '<td> <div class="form-group mb-0"> <input type="text" class="form-control text-light" placeholder="Nama"> </div> </td> ' +
        '<td> <a href="javascript:void(0);" class="remove_button btn btn-sm btn-danger"><i class="fa fa-minus"></i></a> </td>' +
        '</tr>';

    var x = 1;
    var y = 1;

    $('body').on('click', '.add_group', function() {
        if (y < max_group) {
            y++;
            $(this).closest('.group_wrapper').append(html_group);

        }

    });

    $('body').on('click', '.add_button', function() {
        if (x < max_field) {
            x++;
            $(this).closest('.field_wrapper').append(html_fields);
        }
    });

    $('body').on('click', '.remove_group', function(e) {
        e.preventDefault();
        //   $(this).parent(group_wrapper).remove();
        $(this).closest('.group_wrapper').remove();
        y--;
    });

    $('body').on('click', '.remove_button', function(e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        x--;
    });
    </script>
    <script>
    $(document).ready(function() {
        $('select').on('change', function(event) {
            //restore previously selected value
            var prevValue = $(this).data('previous');
            $('select').not(this).find('option[value="' + prevValue + '"]').show();
            //hide option selected                
            var value = $(this).val();
            //update previously selected data
            $(this).data('previous', value);
            $('select').not(this).find('option[value="' + value + '"]').hide();
        });
    });
    </script>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4 ff-gantari">Cetak SK Kepanitiaan</h5>
                    <form action="/tampilDataCetak" method="post">
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" type="text" name="nama_kegiatan" id="nama_kegiatan">
                                <?php foreach ($Kepanitiaan as $kepanitiaan) : ?>
                                <option value="<?= $kepanitiaan['id_status_kepanitiaan'] ?>">
                                    <?= $kepanitiaan['nama_kepanitiaan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="bidang">Nama Kepanitiaan</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" type="text" name="ketua_pelaksana"
                                id="ketua_pelaksana">
                                <option value="">Tidak Ada</option>
                                <?php foreach ($Biodata as $biodata) : ?>
                                <option value="<?= $biodata['id_anggota'] ?>"><?= $biodata['nama_anggota'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="bidang">Ketua Pelaksana</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" type="text" name="sekretaris_pelaksana"
                                id="sekretaris_pelaksana">
                                <option value="">Tidak Ada</option>
                                <?php foreach ($Biodata as $biodata) : ?>
                                <option value="<?= $biodata['id_anggota'] ?>"><?= $biodata['nama_anggota'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="bidang">Sekretars Pelaksana</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                            <select class="form-select text-light" type="text" name="bendahara_pelaksana"
                                id="bendahara_pelaksana">
                                <option value="">Tidak Ada</option>
                                <?php foreach ($Biodata as $biodata) : ?>
                                <option value="<?= $biodata['id_anggota'] ?>"><?= $biodata['nama_anggota'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="bidang">Bendahara Pelaksana</label>
                        </div>
                        <div class="form-floating border-0 mb-3 text-tertiary ff-gantari">
                        <div class="group_wrapper">
                        <a href="javascript:void(0);" class="add_group btn btn-sm btn-primary pull-right"
                            title="Add Group"><i class="fa fa-plus"></i> add group</a>
                        <table id="itemTable" class="table">


                            <thead>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>Nama</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="field_wrapper">
                                <tr class="item-group">
                                    <td><input type="text" class="form-control text-light" placeholder="Divisi"></td>
                                </tr>
                                <tr class="item">
                                    <td><input type="text" class="form-control text-light" placeholder="Koordinator" required></td>
                                    <td><input type="text" class="form-control text-light" placeholder="Nama"></td>
                                </tr>
                                <tr class="item">
                                <td><input type="text" class="form-control text-light" placeholder="Sekretaris Koordinator" required></td>
                                    <td><input type="text" class="form-control text-light" placeholder="Nama"></td>
                                </tr>
                                <tr class="item">
                                <td><input type="text" class="form-control text-light" placeholder="Anggota" required></td>
                                    <td><input type="text" class="form-control text-light" placeholder="Nama"></td>
                                    <td><a href="javascript:void(0);" class="add_button btn btn-sm btn-primary"
                                            title="Add field"><i class="fa fa-plus"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary text-dark ff-gantari"><i
                                class="fa fa-paper-plane"></i>Cetak</button>
                    </form>
                </div>
            </div>

            <!-- Footer Start -->
            <footer class="container-fluid">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start text-tertiary ff-gantari">
                            &copy; 2022 <a href="#">SIHIMA</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
    </div>
</div>
<!-- Content End -->

<?= $this->endSection() ?>
