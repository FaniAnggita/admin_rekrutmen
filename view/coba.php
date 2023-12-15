<label for="input-datalist">Timezone</label>
<input type="text" class="form-control" placeholder="Timezone" list="list-timezone" id="input-datalist">
<datalist id="list-timezone">
    <option>Asia/Aden</option>
    <option>Asia/Aqtau</option>
    <option>Asia/Baghdad</option>
    <option>Asia/Barnaul</option>
    <option>Asia/Chita</option>
    <option>Asia/Dhaka</option>
    <option>Asia/Famagusta</option>
    <option>Asia/Hong_Kong</option>
    <option>Asia/Jayapura</option>
    <option>Asia/Kuala_Lumpur</option>
    <option>Asia/Jakarta</option>
</datalist>


<script>
    document.addEventListener('DOMContentLoaded', e => {
        $('#input-datalist').autocomplete()
    }, false);
</script>