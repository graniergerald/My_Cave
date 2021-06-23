            <form class="InsertBottle" id="InsertBottle" method="post" action="../script/TraitementInsert.php">
                <legend> <h2>Rajouter une bouteille de vin :</h2></legend>
                <p>
                    <label for="CreateNameBottle">Nom du vin</label>
                    <input type="text" name="CreateNameBottle" id="CreateNameBottle" maxlength="100" size="20" required>
                </p>
                
                <p>
                    <label for="CreateYearBottle">Année</label>
                    <input type="number" name="CreateYearBottle" id="CreateYearBottle" maxlength="100" size="20" required>
                </p>

                <p>
                    <label for="CreateGrapesBottle">Sépage</label>
                    <input type="text" name="CreateGrapesBottle" id="CreateGrapesBottle" maxlength="50" size="20" required>
                </p>

                <p>
                    <label for="CreateCountryBottle">Pays</label>
                    <input type="text" name="CreateCountryBottle" id="CreateCountryBottle" maxlength="20" size="20" required>
                </p>

                <p>
                    <label for="CreateRegionBottle">Région</label>
                    <input type="text" name="CreateRegionBottle" id="CreateRegionBottle" maxlength="20" size="20" required>
                </p>

                <p>
                    <label for="CreateDescriptionBottle">Description</label>
                    <textarea type="text" name="CreateDescriptionBottle" id="CreateDescriptionBottle" maxlength="500" placeholder="500 caractères maximum" required></textarea>
                </p>

                <p>
                    <label for="CreatePictureBottle">Image</label>
                    <input type="file" name="CreatePictureBottle" id="CreatePictureBottle" maxlength="20" size="20" required>
                </p>

                <input type="submit" value="Enregistrer">

        </form>