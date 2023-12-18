$(document).ready(function () {
    var table = $('#deviceTable').DataTable({
        fixedColumns: {
            left: 5
        },
        paging: true,
        scrollCollapse: true,
        scrollY: true,
        scrollX: true,
        select: true,
    });

    // Add a checkbox for row selection
    $('#deviceTable thead tr').first().prepend('<th><input type="checkbox" id="select-all"></th>');

    // Handle row selection
    $('#deviceTable tbody').on('click', '.select-checkbox', function () {
        $(this).toggleClass('selected');
    });

    // Handle "Select All" checkbox
    $('#select-all').on('click', function () {
        var rows = table.rows({ page: 'current' }).nodes();
        $(':checkbox', rows).prop('checked', this.checked).toggleClass('selected', this.checked);
    });

    // Create select inputs for each column
    table.columns().every(function () {
        var column = this;
        if (column.index() !== 0) {
            var select = $('<br><select class="w-100 form-select-sm"><option value=""></option></select>')
                .appendTo($(column.header()))
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                });

            column.data().unique().sort().each(function (d, j) {
                select.append('<option value="' + d + '">' + d + '</option>');
            });
        }
    });

    // Function to populate form fields based on the selected ID
    function populateFormFields(selectedId) {
        // Find the selected row based on the ID
        var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

        // Extract values from the selected row
        var tanggalseleksi = selectedRow.find('td:eq(2)').text(); // Assuming the date is in the third column
        var nilaiCv = parseInt(selectedRow.find('td:eq(6)').text(), 10);
        var nilaiKualifikasi = parseInt(selectedRow.find('td:eq(7)').text(), 10);
        var nilaiPengalaman = parseInt(selectedRow.find('td:eq(8)').text(), 10);
        var hasil = selectedRow.find('td:eq(9)').text(); // Assuming Hasil is in the tenth column
        var keterangan = selectedRow.find('td:eq(10)').text(); // Assuming Keterangan is in the eleventh column

        // Populate form fields with extracted values
        $('#selectedIdsInput').val(selectedId); // Add this line to set the selected ID
        $('#tanggalseleksi').val(tanggalseleksi);
        $('#nilaiCv').val(nilaiCv);
        $('#nilaiKualifikasi').val(nilaiKualifikasi);
        $('#nilaiPengalaman').val(nilaiPengalaman);
        $('#hasil').val(hasil);
        $('#keterangan').val(keterangan);

        // Trigger the modal display
        $('#editModal').modal('show');
    }

    // Handle "Edit" button click
    $('#editButton').on('click', function () {
        var selectedIds = [];
        $('.select-checkbox:checked').each(function () {
            var id = $(this).closest('tr').find('td:eq(3)').text(); // Assuming the ID is in the fourth column
            selectedIds.push(id);
        });

        // Check if any IDs are selected
        if (selectedIds.length > 0) {
            // If only one ID is selected, populate form fields
            if (selectedIds.length === 1) {
                populateFormFields(selectedIds[0]);
            } else {
                // If multiple IDs are selected, set only the selected IDs in #selectedIdsInput
                $('#selectedIdsInput').val(selectedIds.join(', '));

                // Set default values to empty for other fields
                $('#tanggalseleksi').val('');
                $('#nilaiCv').val('');
                $('#nilaiKualifikasi').val('');
                $('#nilaiPengalaman').val('');
                $('#hasil').val('');
                $('#keterangan').val('');

                // Trigger the modal display
                $('#editModal').modal('show');
            }
        } else {
            // Show an alert or perform any other action if no IDs are selected
            alert('Please select at least one row.');
        }
    });


    // Handle popstate event to show the modal when using the back button
    $(window).on('popstate', function () {
        $('#editModal').modal('show');
    });

    // WII
    // Function to populate WII form fields based on the selected ID
    function populateWiiFormFields(selectedId) {
        var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

        // Extract values from the selected row
        var waktuInterview = selectedRow.find('td:eq(11)').text();
        var konfirmasiKehadiran = selectedRow.find('td:eq(12)').text();
        var p = selectedRow.find('td:eq(13)').text();
        var a = selectedRow.find('td:eq(14)').text();
        var k = selectedRow.find('td:eq(15)').text();
        var r = selectedRow.find('td:eq(16)').text();
        var interviewer = selectedRow.find('td:eq(17)').text();
        var rating = selectedRow.find('td:eq(18)').text();
        var pengumuman = selectedRow.find('td:eq(19)').text();

        // Populate form fields with extracted values
        $('#selectedIdsInputWII').val(selectedId);
        $('#waktuInterview').val(waktuInterview);
        $('#konfirmasiKehadiran').val(konfirmasiKehadiran);
        $('#p').val(p);
        $('#a').val(a);
        $('#k').val(k);
        $('#r').val(r);
        $('#id_int').val(interviewer);
        $('#rating').val(rating);
        $('#pengumuman').val(pengumuman);

        // Trigger the modal display
        $('#editModalWII').modal('show');
    }


    // Handle "Edit" button click for WII form
    $('#editButtonWII').on('click', function () {
        var selectedIds = [];
        $('.select-checkbox:checked').each(function () {
            var id = $(this).closest('tr').find('td:eq(3)').text();
            selectedIds.push(id);
        });

        if (selectedIds.length > 0) {
            if (selectedIds.length === 1) {
                populateWiiFormFields(selectedIds[0]);
            } else {
                $('#selectedIdsInputWII').val(selectedIds.join(', '));
                $('#waktuInterview').val('');
                $('#konfirmasiKehadiran').val('');
                $('#p').val('');
                $('#a').val('');
                $('#k').val('');
                $('#r').val('');
                $('#id_int').val('');
                $('#rating').val('');
                $('#pengumuman').val('');

                $('#editModalWII').modal('show');
            }
        } else {
            alert('Please select at least one row.');
        }
    });

    // Handle popstate event to show the WII modal when using the back button
    $(window).on('popstate', function () {
        $('#editModalWII').modal('show');
    });

    // Psikotest
    // Function to populate Psikotest form fields based on the selected ID
    function populatePsikotestFormFields(selectedId) {
        var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

        // Extract values from the selected row
        var tanggalPsikotest = selectedRow.find('td:eq(20)').text();
        var konfirmasiKehadiranPsikotest = selectedRow.find('td:eq(21)').text();
        var hasilPsikotest = selectedRow.find('td:eq(22)').text();
        var keteranganPsikotest = selectedRow.find('td:eq(23)').text();
        var pengumumanPsikotest = selectedRow.find('td:eq(24)').text();

        // Populate form fields with extracted values
        $('#tanggalPsikotest').val(tanggalPsikotest);
        $('#konfirmasiKehadiran').val(konfirmasiKehadiranPsikotest);
        $('#hasilPsikotest').val(hasilPsikotest);
        $('#keterangan').val(keteranganPsikotest);
        $('#pengumuman').val(pengumumanPsikotest);

        // Trigger the modal display
        $('#editModalPsikotest').modal('show');
    }

    // Handle "Edit" button click for Psikotest form
    $('#editButtonPsikotest').on('click', function () {
        var selectedIds = [];
        $('.select-checkbox:checked').each(function () {
            var id = $(this).closest('tr').find('td:eq(3)').text();
            selectedIds.push(id);
        });

        if (selectedIds.length > 0) {
            if (selectedIds.length === 1) {
                populatePsikotestFormFields(selectedIds[0]);
            } else {
                $('#selectedIdsInputPsikotest').val(selectedIds.join(', '));
                $('#tanggalPsikotest').val('');
                $('#konfirmasiKehadiran').val('');
                $('#hasilPsikotest').val('');
                $('#keterangan').val('');
                $('#pengumuman').val('');

                $('#editModalPsikotest').modal('show');
            }
        } else {
            alert('Please select at least one row.');
        }
    });

    // Handle popstate event to show the Psikotest modal when using the back button
    $(window).on('popstate', function () {
        $('#editModalPsikotest').modal('show');
    });
    // Tes Bidang
    // Function to populate Tes Bidang form fields based on the selected ID
    function populateTesBidangFormFields(selectedId) {
        var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

        // Extract values from the selected row
        var tanggalTesBidang = selectedRow.find('td:eq(25)').text();
        var konfirmasiKehadiranTesBidang = selectedRow.find('td:eq(26)').text();
        var nilaiTB1 = selectedRow.find('td:eq(27)').text();
        var korektor1 = selectedRow.find('td:eq(28)').text();
        var nilaiTB2 = selectedRow.find('td:eq(29)').text();
        var korektor2 = selectedRow.find('td:eq(30)').text();
        var hasilTB = selectedRow.find('td:eq(31)').text();
        var keteranganTB = selectedRow.find('td:eq(32)').text();
        var pengumumanTB = selectedRow.find('td:eq(33)').text();

        // Populate form fields with extracted values
        $('#tanggalTesBidang').val(tanggalTesBidang);
        $('#konfirmasiKehadiranTesBidang').val(konfirmasiKehadiranTesBidang);
        $('#nilaiTB1').val(nilaiTB1);
        $('#korektor1').val(korektor1);
        $('#nilaiTB2').val(nilaiTB2);
        $('#korektor2').val(korektor2);
        $('#hasilTB').val(hasilTB);
        $('#keteranganTB').val(keteranganTB);
        $('#pengumumanTB').val(pengumumanTB);

        // Trigger the modal display
        $('#editModalTesBidang').modal('show');
    }

    // Handle "Edit" button click for Tes Bidang form
    $('#editButtonTesBidang').on('click', function () {
        var selectedIds = [];
        $('.select-checkbox:checked').each(function () {
            var id = $(this).closest('tr').find('td:eq(3)').text();
            selectedIds.push(id);
        });

        if (selectedIds.length > 0) {
            if (selectedIds.length === 1) {
                populateTesBidangFormFields(selectedIds[0]);
            } else {
                $('#selectedIdsInputTesBidang').val(selectedIds.join(', '));
                $('#tanggalTesBidang').val('');
                $('#konfirmasiKehadiranTesBidang').val('');
                $('#nilaiTB1').val('');
                $('#korektor1').val('');
                $('#nilaiTB2').val('');
                $('#korektor2').val('');
                $('#hasilTB').val('');
                $('#keteranganTB').val('');
                $('#pengumumanTB').val('');

                $('#editModalTesBidang').modal('show');
            }
        } else {
            alert('Please select at least one row.');
        }
    });

    // Handle popstate event to show the Tes Bidang modal when using the back button
    $(window).on('popstate', function () {
        $('#editModalTesBidang').modal('show');
    });

    // InDepth
    // Function to populate InDepth form fields based on the selected ID
    function populateInDepthFormFields(selectedId) {
        var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

        // Extract values from the selected row
        var tanggalInDepth = selectedRow.find('td:eq(30)').text();
        var konfirmasiKehadiranInDepth = selectedRow.find('td:eq(31)').text();
        var ktb = selectedRow.find('td:eq(32)').text();
        var kpr = selectedRow.find('td:eq(33)').text();
        var siker = selectedRow.find('td:eq(34)').text();
        var hasilInDepth = selectedRow.find('td:eq(35)').text();
        var keteranganInDepth = selectedRow.find('td:eq(36)').text();
        var interviewerInDepth = selectedRow.find('td:eq(37)').text();
        var pengumumanInDepth = selectedRow.find('td:eq(38)').text();

        // Populate form fields with extracted values
        $('#tanggalInDepth').val(tanggalInDepth);
        $('#konfirmasiKehadiranInDepth').val(konfirmasiKehadiranInDepth);
        $('#ktb').val(ktb);
        $('#kpr').val(kpr);
        $('#siker').val(siker);
        $('#hasilInDepth').val(hasilInDepth);
        $('#keteranganInDepth').val(keteranganInDepth);
        $('#interviewerInDepth').val(interviewerInDepth);
        $('#pengumumanInDepth').val(pengumumanInDepth);

        // Trigger the modal display
        $('#editModalInDepth').modal('show');
    }

    // Handle "Edit" button click for InDepth form
    $('#editButtonInDepth').on('click', function () {
        var selectedIds = [];
        $('.select-checkbox:checked').each(function () {
            var id = $(this).closest('tr').find('td:eq(3)').text();
            selectedIds.push(id);
        });

        if (selectedIds.length > 0) {
            if (selectedIds.length === 1) {
                populateInDepthFormFields(selectedIds[0]);
            } else {
                $('#selectedIdsInputInDepth').val(selectedIds.join(', '));
                $('#tanggalInDepth').val('');
                $('#konfirmasiKehadiranInDepth').val('');
                $('#ktb').val('');
                $('#kpr').val('');
                $('#siker').val('');
                $('#hasilInDepth').val('');
                $('#keteranganInDepth').val('');
                $('#interviewerInDepth').val('');
                $('#pengumumanInDepth').val('');

                $('#editModalInDepth').modal('show');
            }
        } else {
            alert('Please select at least one row.');
        }
    });

    // Handle popstate event to show the InDepth modal when using the back button
    $(window).on('popstate', function () {
        $('#editModalInDepth').modal('show');
    });
    // InterviewUser
    // Function to populate InterviewUser form fields based on the selected ID
    function populateInterviewUserFormFields(selectedId) {
        var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

        // Extract values from the selected row
        var tanggalInterviewUser = selectedRow.find('td:eq(39)').text();
        var konfirmasiKehadiranInterviewUser = selectedRow.find('td:eq(40)').text();
        var dt = selectedRow.find('td:eq(41)').text();
        var ka = selectedRow.find('td:eq(42)').text();
        var pm = selectedRow.find('td:eq(43)').text();
        var pd = selectedRow.find('td:eq(44)').text();
        var bd = selectedRow.find('td:eq(45)').text();
        var ktb2 = selectedRow.find('td:eq(46)').text();
        var hasilInterviewUser = selectedRow.find('td:eq(47)').text();
        var keteranganInterviewUser = selectedRow.find('td:eq(48)').text();
        var interviewerInterviewUser = selectedRow.find('td:eq(49)').text();
        var pengumumanInterviewUser = selectedRow.find('td:eq(50)').text();

        // Populate form fields with extracted values
        $('#tanggalInterviewUser').val(tanggalInterviewUser);
        $('#konfirmasiKehadiranInterviewUser').val(konfirmasiKehadiranInterviewUser);
        $('#dt').val(dt);
        $('#ka').val(ka);
        $('#pm').val(pm);
        $('#pd').val(pd);
        $('#bd').val(bd);
        $('#ktb2').val(ktb2);
        $('#hasilInterviewUser').val(hasilInterviewUser);
        $('#keteranganInterviewUser').val(keteranganInterviewUser);
        $('#interviewerInterviewUser').val(interviewerInterviewUser);
        $('#pengumumanInterviewUser').val(pengumumanInterviewUser);

        // Trigger the modal display
        $('#editModalInterviewUser').modal('show');
    }

    // Handle "Edit" button click for InterviewUser form
    $('#editButtonInterviewUser').on('click', function () {
        var selectedIds = [];
        $('.select-checkbox:checked').each(function () {
            var id = $(this).closest('tr').find('td:eq(3)').text();
            selectedIds.push(id);
        });

        if (selectedIds.length > 0) {
            if (selectedIds.length === 1) {
                populateInterviewUserFormFields(selectedIds[0]);
            } else {
                $('#selectedIdsInputInterviewUser').val(selectedIds.join(', '));
                $('#tanggalInterviewUser').val('');
                $('#konfirmasiKehadiranInterviewUser').val('');
                $('#dt').val('');
                $('#ka').val('');
                $('#pm').val('');
                $('#pd').val('');
                $('#bd').val('');
                $('#ktb2').val('');
                $('#hasilInterviewUser').val('');
                $('#keteranganInterviewUser').val('');
                $('#interviewerInterviewUser').val('');
                $('#pengumumanInterviewUser').val('');

                $('#editModalInterviewUser').modal('show');
            }
        } else {
            alert('Please select at least one row.');
        }
    });

    // Handle popstate event to show the InterviewUser modal when using the back button
    $(window).on('popstate', function () {
        $('#editModalInterviewUser').modal('show');
    });

    // HasilAkhir
    // Function to populate HasilAkhir form fields based on the selected ID
    function populateHasilAkhirFormFields(selectedId) {
        var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

        // Extract values from the selected row
        var hasilAkhir = selectedRow.find('td:eq(51)').text();
        var alasanTidakLolos = selectedRow.find('td:eq(52)').text();
        var spkwt = selectedRow.find('td:eq(53)').text();
        var masukKerja = selectedRow.find('td:eq(54)').text();

        // Populate form fields with extracted values
        $('#hasilAkhir').val(hasilAkhir);
        $('#alasanTidakLolos').val(alasanTidakLolos);
        $('#spkwt').val(spkwt);
        $('#masukKerja').val(masukKerja);

        // Trigger the modal display
        $('#editModalHasilAkhir').modal('show');
    }

    // Handle "Edit" button click for HasilAkhir form
    $('#editButtonHasilAkhir').on('click', function () {
        var selectedIds = [];
        $('.select-checkbox:checked').each(function () {
            var id = $(this).closest('tr').find('td:eq(3)').text();
            selectedIds.push(id);
        });

        if (selectedIds.length > 0) {
            if (selectedIds.length === 1) {
                populateHasilAkhirFormFields(selectedIds[0]);
            } else {
                $('#selectedIdsInputHasilAkhir').val(selectedIds.join(', '));
                $('#hasilAkhir').val('');
                $('#alasanTidakLolos').val('');
                $('#spkwt').val('');
                $('#masukKerja').val('');

                $('#editModalHasilAkhir').modal('show');
            }
        } else {
            alert('Please select at least one row.');
        }
    });

    // Handle popstate event to show the HasilAkhir modal when using the back button
    $(window).on('popstate', function () {
        $('#editModalHasilAkhir').modal('show');
    });


});