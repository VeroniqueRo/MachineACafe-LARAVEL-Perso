
<div class="panel panel-default">
    <div class="panel-body">
        <form class="" action="/user" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nomboisson">Nom de la Boisson</label>
                <input type="text" class="form-control" name="nomboisson" placeholder="entrer le nom de la boisson">
            </div>
            <div class="form-group">
                <label for="prixboisson">Prix de la Boisson</label>
                <input type="text" class="form-control" name="prixboisson" placeholder="entrer le prix de la boisson">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>