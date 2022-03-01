
<form action="add-product" method="post">

{{@csrf_field()}}

<p>
    Neve: <input type="text" name="name" placeholder="Neve" > 
</p>

<p>
    Ár: <input type="text" name="price" placeholder="Ár" > 
</p>

<p>
    Cikkszám: <input type="text" name="number" placeholder="Cikkszám" > 
</p>

<p>
    <button type="submit">Küldés</button>
</p>

</form>