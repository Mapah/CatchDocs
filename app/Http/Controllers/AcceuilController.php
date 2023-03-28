class AcceuilController extends Controller
{
    public function index()
    {
        $site_settings = [
            'title' => setting('CatchDocs'),
            'description' => setting('site.description')
        ];

        return view('acceuil', [
            'site_settings' => $site_settings
        ]);
    }
}