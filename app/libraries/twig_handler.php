<?


use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class TwigHandler {
    private $twig;
    public function __construct($templatePath = '/app/views/templates') {
        $loader = new FilesystemLoader($templatePath);
        $this->twig = new Environment($loader);
    }
    public function render($template, $data = []) {
        return $this->twig->render($template, $data);
    }
}