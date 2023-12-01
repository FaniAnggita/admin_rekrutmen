<!-- Modal -->
<div class="modal  fade" id="modalFilterDashboard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Filter Tanggal Lamaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="start_date" class="form-label">Tanggal Awal
                            Lamaran:</label>
                        <input type="date" id="start_date" class="form-control" name="start_date"
                            value="<?php echo isset($_GET['start_date']) ? $_GET['start_date'] : ''; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="end_date" class="form-label">Tanggal Akhir
                            Lamaran:</label>
                        <input type="date" id="end_date" class="form-control" name="end_date"
                            value="<?php echo isset($_GET['end_date']) ? $_GET['end_date'] : ''; ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>