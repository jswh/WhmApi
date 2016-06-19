# WhmApi
a php version of whm api wrapper and the wrapper generator

## usage

    $accessToken = 'test token';
    $whm = new Whm('username', 'www.site.com', $accessToken);
    $whm->AddonDomians->convert_addon_fetch_domain_details('www.jswh.lol');

## Tips

* almost all api are generated by the ApiGenerator by parsing the whm api website
* the api function names are the same with that on the website
* the required parameters are set in the function arguments
* not required parameters can be put into the `$params` function argument if exit