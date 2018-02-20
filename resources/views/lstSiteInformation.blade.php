<p> liste des sites informations dans la base de données  </p>

@foreach ($listSiteInformations as $siteInformation)
    <p>Nandalo tato</p>
    <p>{{ $siteInformation->NOMSITEWEB }}</p>
@endforeach
