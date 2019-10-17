<div class="form-row">
    <div class="col-md-2 mb-3">
        <label for="formValidation08">Poids (lbs)</label>
        <input type="text" class="form-control" id="formValidation08" required>
    </div>
    <div class="col-md-2 mb-3">
        <label for="formValidation09">Grandeur (pieds)</label>
        <input type="text" class="form-control" id="formValidation09" required>
    </div>
</div>
<br>

<!-- Habitudes de vie -->
<h4 class="m-0 text-dark">Habitudes de vie</h4>
<br>
<div class="form-row">
    <div class="col-md-2 mb-3">
        <label for="formValidation10">Pression sanguine</label>
        <select id="formValidation10" class="form-control">
            <option selected>Sélectionner</option>
            <option>Basse</option>
            <option>Normale</option>
            <option>Haute</option>
        </select>
    </div>
    <div class="col-md-2 mb-3">
        <label for="formValidation11">Fumeur</label>
        <select id="formValidation11" class="form-control">
            <option selected>Sélectionner</option>
            <option>Oui</option>
            <option>Non</option>
        </select>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation12">Si Oui combien par jour</label>
        <input type="number" min="0" class="form-control" id="formValidation12" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation13">Alcool (verres par session)</label>
        <input type="number" min="0" class="form-control" id="formValidation13" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-2 mb-3">
        <label for="formValidation14">Type d'emplois</label>
        <select id="formValidation14" class="form-control">
            <option selected>Sélectionner</option>
            <option>Physique</option>
            <option>Passif</option>
        </select>
    </div>
    <div class="col-md-2 mb-3">
        <label for="formValidation15">Style de vie</label>
        <select id="formValidation15" class="form-control">
            <option selected>Sélectionner</option>
            <option>Sédentaire</option>
            <option>Actif</option>
            <option>Sportif</option>
            <option>Athlète</option>
        </select>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation16">Activité(s) physiques</label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation16" required></textarea>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation17">Nbre de fois par session</label>
        <input type="number" min="0" class="form-control" id="formValidation17" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-2 mb-3">
        <label for="formValidation18">Expérience antérieure</label>
        <select id="formValidation18" class="form-control">
            <option selected>Sélectionner</option>
            <option>Oui</option>
            <option>Non</option>
        </select>
    </div>
    <div class="col-md-2 mb-3">
        <label for="formValidation19">Nbre d'années</label>
        <input type="number" min="0" class="form-control" id="formValidation19" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="formValidation20">Disponibilités pour entrainement X/sem</label>
        <input type="number" min="0" class="form-control" id="formValidation20" required>
    </div>
    <div class="col-md-2 mb-3">
        <label for="formValidation21">Nbre d'heures</label>
        <input type="number" min="0" class="form-control" id="formValidation21" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="formValidation22">Ce que vous aimez ou n'aimez pas faire (cardio, machines,
            poids libre...)</label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation22" required></textarea>
    </div>
</div>
<br>

<!-- Objectifs présents -->
<h4 class="m-0 text-dark">Objectifs présents</h4>
<br>
<div class="form-row">
    <div class="col-md-2 mb-3">
        <label for="formValidation23">Objectif</label>
        <select id="formValidation23" class="form-control">
            <option selected>Sélectionner</option>
            <option>Perte de poids</option>
            <option>Remise en forme</option>
            <option>Préparation pour une compétition</option>
            <option>Prise de masse</option>
        </select>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation24">Si perte de poids (lbs)</label>
        <input type="number" min="0" class="form-control" id="formValidation24" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation25">Si préparation pour une compétition</label>
        <input type="date" id="formValidation25" name="trip-start" value="2019-10-01" min="2019-10-01" max="2035-10-01">
    </div>
</div>
<br>

<!-- Renseignements médicaux -->
<h4 class="m-0 text-dark">Renseignements médicaux</h4>
<br>
<div class="form-row">
    <!-- Medical formValidation26 -->
    <label for="formValidation26">
        1) Votre médecin vous a-t-il déjà dit que vous souffriez d’un
        problème cardiaque et que vous
        ne devriez participer qu’aux activités prescrites et approuvées par un médecin?
    </label>
    <select id="formValidation26" class="form-control">
        <option selected>Sélectionner</option>
        <option>Oui</option>
        <option>Non</option>
    </select>
    <!-- Medical formValidation27 -->
    <label for="formValidation27">
        2) Ressentez-vous une douleur à la poitrine lorsque vous faites de l’activité physique?
    </label>
    <select id="formValidation27" class="form-control">
        <option selected>Sélectionner</option>
        <option>Oui</option>
        <option>Non</option>
    </select>
    <!-- Medical formValidation28 -->
    <label for="formValidation28">
        3) Au cours du dernier mois, avez-vous ressenti des douleurs à la poitrine lors de périodes
        autres que celles où vous participiez à une activité physique?
    </label>
    <select id="formValidation28" class="form-control">
        <option selected>Sélectionner</option>
        <option>Oui</option>
        <option>Non</option>
    </select>
    <!-- Medical formValidation29 -->
    <label for="formValidation29">
        4) Éprouvez-vous des problèmes d’équilibre reliés à un étourdissement ou vous arrive-t-il de
        perdre connaissance?
    </label>
    <select id="formValidation29" class="form-control">
        <option selected>Sélectionner</option>
        <option>Oui</option>
        <option>Non</option>
    </select>
    <!-- Medical formValidation30 -->
    <label for="formValidation30">
        5) Avez-vous des problèmes osseux ou articulaires (par exemple, au dos, au genoux ou à la
        hanche) qui pourraient s’aggraver par une modification de votre niveau de participation à
        une activité physique?
    </label>
    <select id="formValidation30" class="form-control">
        <option selected>Sélectionner</option>
        <option>Oui</option>
        <option>Non</option>
    </select>
    <!-- Medical formValidation31 -->
    <label for="formValidation31">
        6) Des médicaments vous sont-ils actuellement prescrits pour contrôler votre tension
        artérielle ou un problème cardiaque (par exemple, des diurétiques)?
    </label>
    <select id="formValidation31" class="form-control">
        <option selected>Sélectionner</option>
        <option>Oui</option>
        <option>Non</option>
    </select>
    <!-- Medical formValidation32 -->
    <label for="formValidation32">
        7) Connaissez-vous une autre raison pour laquelle vous ne devriez pas faire de l’activité
        physique?
    </label>
    <select id="formValidation32" class="form-control">
        <option selected>Sélectionner</option>
        <option>Oui</option>
        <option>Non</option>
    </select>
</div>
<br>
<h6>-Si vous avez répondu Oui à une ou plusieurs questions :</h6>
<p>
    Consulter votre médecin AVANT d’augmenter votre niveau de participation à une activité
    physique et AVANT de faire évaluer votre condition physique, dites à votre médecin que vous
    avez complété le questionnaire sur l’aptitude à l’activité physique et expliquez-lui précisément
    à quelles questions vous avez répondu « Oui » il se peut que vous n’avez aucune restrictions à
    y aller lentement et progressivement. Par ailleurs, il est possible que vous ne puissiez faire que
    certains types d’efforts adaptés à votre état de santé. Indiquez à votre médecin le
    type d’activité physique que vous comptiez faire et suivez ses recommandations.
    Informez-vous quant aux programmes d’activités spécialisés les mieux adaptés à
    vos besoins, offerts dans votre localité.
</p>
<h6>-Non à toutes ces questions :</h6>
<p>
    Si, en toute honnêteté, vous avez répondu « Non » à toutes les questions, vous êtes dans un
    certaines mesure, assuré (e) que:
    Vous pouvez augmenter votre pratique régulière d’activités physiques en commençant
    lentement et en augmentant progressivement l’intensité des activités pratiques c’est le moyen
    le plus simple et le plus sécuritaire d’y arriver. Vous pouvez faire évaluer votre condition
    physique. C’est le meilleur moyen de connaitre votre niveau de condition physique de base
    afin de mieux planifier votre participation à un programme d’activités physiques.
</p>
<br>
<label for="trainingFormSignature">
    « Je sous-signé (e) affirme avoir lu, compris et complété le questionnaire et avoir reçu une
    réponse satisfaisante à chacune de mes questions. »
</label>
<div class="form-row">
    <div class="col-md-5 mb-3">
        <label for="formValidation33">Nom</label>
        <input type="text" class="form-control" id="formValidation33" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="formValidation34">Signature</label>
        <input type="text" class="form-control" id="formValidation34" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation35">Date de la signature</label>
        <input type="date" id="formValidation35" name="trip-start" value="2019-10-01" min="2019-10-01" max="2035-10-01">
    </div>
</div>
<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="formValidation36">Témoin</label>
        <input type="text" class="form-control" id="formValidation36" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="formValidation37">Date de la signature</label>
        <input type="date" id="formValidation37" name="trip-start" value="2019-10-01" min="2019-10-01" max="2035-10-01">
    </div>
</div>

<!-- part 2 -->

<div class="container">
    <div class="form-row my-5">
        <!-- Questionnaire pour plan alimentaire -->
        <h4 class="m-0 text-dark font-weight-bold"><span>Questionnaire pour plan alimentaire</span></h4>
    </div>

    <div class="form-row">
        <!--  -->
        <label for="formValidation38">
            1) Avez-vous des allergies ou intolérances alimentaires?
        </label>
        <select id="formValidation38" class="form-control">
            <option selected>Sélectionner</option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        <label for="formValidation39">
            Si Oui indiquez lesquels :
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation39" required></textarea>
        <!--  -->
        <label for="formValidation40">
            2) Combien de fois par semaine pratiquez-vous du sport et à quelle intensité?
        </label>
        <select id="formValidation40" class="form-control">
            <option selected>Sélectionner</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <label for="formValidation41">
            Si Oui sélectionner l'intensité :
        </label>
        <select id="formValidation41" class="form-control">
            <option selected>Sélectionner</option>
            <option>Légère</option>
            <option>Moyenne</option>
            <option>Élevée (gym)</option>
        </select>
        <!--  -->
        <label for="formValidation42">
            3) Consommez-vous des produits laitiers?
        </label>
        <select id="formValidation42" class="form-control">
            <option selected>Sélectionner</option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        <label for="formValidation43">
            Si Oui indiquez lesquels :
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation43" required></textarea>
        <!--  -->
        <label for="formValidation44">
            4) Quels sont les légumes que vous consommez et que vous aimez?
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation44" required></textarea>
        <!--  -->
        <label for="formValidation45">
            5) Quels sont les légumes que vous n’aimez pas?
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation45" required></textarea>
        <!--  -->
        <label for="formValidation46">
            6) Quels sont les fruits que vous consommez et que vous aimez?
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation46" required></textarea>
        <!--  -->
        <label for="formValidation47">
            7) Quels sont les fruits que vous n’aimez pas?
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation47" required></textarea>
        <!--  -->
        <label for="formValidation48">
            8) Quels types de protéines consommez-vous? Et lesquels vous préférez?
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation48" required></textarea>
        <!--  -->
        <label for="formValidation49">
            9) Quels sont les types de protéines que vous n’aimez pas?
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation49" required></textarea>
        <!--  -->
        <label for="formValidation50">
            10) Consommez-vous des protéines en poudre ou en barre? Lesquels et à quel
            moment?
        </label>
        <select id="formValidation50" class="form-control">
            <option selected>Sélectionner</option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        <label for="formValidation51">
            Si Oui indiquez lesquels :
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation51" required></textarea>
        <!--  -->
        <label for="formValidation52">
            11) Consommez-vous des suppléments alimentaires et si oui lesquels?
        </label>
        <select id="formValidation52" class="form-control">
            <option selected>Sélectionner</option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        <label for="formValidation53">
            Si Oui indiquez lesquels :
        </label>
        <textarea type="textarea" min="0" class="form-control" id="formValidation53" required></textarea>
    </div>
</div>