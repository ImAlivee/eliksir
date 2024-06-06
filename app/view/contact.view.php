<div>
    <h2 class="titrestyle">Nous contacter</h2>
</div>
<form action="post">
    <div class="form-group">
        <label id="name-label" for="nom">Nom</label>
        <input
            type="text"
            name="nom"
            id="nom"
            class="form-control"
            placeholder="Gunther"
            required
        />
    </div>

    <div class="form-group">
    <label id="firstname-label" for="firstname">Prénom</label>
    <input
        type="text"
        name="prenom"
        id="prenom"
        class="form-control"
        placeholder="Viking"
        required
    />
    </div>

    <div class="form-group">
    <label id="email-label" for="email">Email</label>
    <input
        type="email"
        name="email"
        id="email"
        class="form-control"
        placeholder="gunther.viking@eliksir.fr"
        required
    />
    </div>    
    <div class="form-group">
        <p>Pour quelle raison voulez-vous nous contactez ?</p>
        <select id="dropdown" name="role" required>
            <option disabled selected value>Sélectionner une option</option>
            <option value="problemes">Problèmes avec une commande </option>
            <option value="bug">Bug du site Internet </option>
            <option value="infos">Demande d'informations </option>
        </select>
    </div>

    <div class="form-group">
        <p>Souhaitez vous être recontacter à la suite du traitement de votre réponse ? </p>
        <label>
            <input
            name="user-recommend"
            value="oui"
            type="radio"
            class="input-radio"
            checked
            />Oui
        </label>

        <label>
            <input
            name="user-recommend"
            value="non"
            type="radio"
            class="input-radio"
            />Non
        </label>
    </div>

    <div class="form-group">
            <p>Veuillez nous expliquer votre demande :</p>
            <textarea
              id="comments"
              class="input-textarea"
              name="demande"
              placeholder="Veuillez expliquer votre demande ..."
            ></textarea>
    </div>
      
    <div class="form-group">
    <button type="submit" id="submit" class="submit-button">
        Envoyer
    </button>
    </div>
</form>