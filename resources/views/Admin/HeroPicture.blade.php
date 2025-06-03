<html>
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
<section>
<div class="container">
    <form action="/admin/heropic/store" method="post" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label for="image" class="form-label">Foto</label>
        <input type="file" class="form-control" id="image" name="image">
        <button type="submit" class="btn btn-primary">Save changes</button>  
     </div>
    </form>
</div>
</section>

<div class="table-responsive">
    <table class="table">
        <tbody>
            <?php foreach ($hero as $pict): ?>
            <tr>
                <td><img src="<?= asset('home/' . $pict['content']); ?>" alt="Hero Image" style="max-height: 80px;"></td>
                <td><?= $pict['content']; ?></td>
                <td>
                    <form action="/admin/heropic/delete/<?= $pict['id']; ?>" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</html>