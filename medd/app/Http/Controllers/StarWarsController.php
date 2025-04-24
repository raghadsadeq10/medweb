class StarWarsController extends Controller{
    $page = $request->input('page', 1);
    $request = Http::get(https://swapi.dev/api/people/1/),[
        $page => page];
 
}


if ($response->successful()) {
$data = $response->json();



return view('people', [
                'people' => $data['results'],
                'nextPage' => $data['next'],
                'prevPage' => $data['previous'],
            ]);


else{
    ($response->error()) { $data =$response->error}



}

    
        
}