<div class="container">

	<h1 class="title">Modifier mon profil</h1>

	<div class="grid">
        <form action="edit_name.php">

            <div class="form-group a">
                <label for="name">Name</label>
                <input id="firstname" type="text" name="firstname" placeholder="Enter First Name">
                <input id="lastname" type="text" name="lastname"  placeholder="Enter Last Name">
            </div>
            <button class="btn btn-primary" type="submit">Edit</button>
        </form>
            
            <div class="form-group b">
                <input id="lastname" type="text">
                <label for="name">Prénom</label>
            </div>

		<div class="form-group email-group">
			<label for="email">Email</label>
			<input id="email" type="text">
		</div>

		<div class="form-group phone-group">
			<label for="phone">Téléphone (mobile)</label>
			<input id="phone" type="text">
		</div>

		<div class="textarea-group">
			<label for="bio">Bio</label>
			<textarea id="bio"></textarea>
		</div>

		<div class="form-group">
			<label for="address">Adresse</label>
			<input id="address" type="text">
		</div>

		<div class="form-group">
			<label for="city">Ville</label>
			<input id="city" type="text">
		</div>

		<div class="form-group">
			<label for="zip">Code postal</label>
			<input id="zip" type="text">
		</div>
	</div>

	<div class="checkboxes">

		<div class="checkbox-group">
			<input id="newsletter" type="checkbox">
			<label for="newsletter">Je souhaite recevoir la newsletter</label>
		</div>

		<div class="checkbox-group">
			<input id="newsletter-partners" type="checkbox">
			<label for="newsletter-partners">Je souhaite recevoir la newsletter des partenaires</label>
		</div>

	</div>

	<div class="button-container">
		<button class="button">Enregister les modifications</button>
	</div>
</div>