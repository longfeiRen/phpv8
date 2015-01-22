<?php
namespace Phpv8\Controllers;

use Config;
use Controller;
use Input;
use Lang;
use Patchwork\Utf8;
use Response;
use View;

abstract class BaseBackController extends Controller
{

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'admin/master';

    protected $repository;
    protected $form;
    protected $linkUrl;
    //SEO标题
    public $appname;
    public $title  = array(
        'parent'   => '',
        'child'    => '',
        'h1'       => '',
    );

    public function __construct($repository = null, $form = null)
    {
        $this->repository = $repository;
        $this->form = $form;
        $this->linkUrl = 'http://r.cn/source';
        $this->imageUrl = 'http://r.cn/source';
        $this->appname = 'phpv8开源ORM';

        $instance = $this;
        View::composer($this->layout, function (\Illuminate\View\View $view) use ($instance) {
            $view->with('title', $instance->getTitle());
            $view->with('static', $instance->linkUrl);
            $view->with('img', $instance->imageUrl);
        });
    }

    public function getTitle()
    {
        $title = Utf8::ucfirst($this->title['parent']);
        if ($this->title['child']) {
            $title .= ' – ' . Utf8::ucfirst($this->title['child']);
        }
        $title .= ' – ' . $this->appname;

        return $title;
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (! is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    /**
     * Sort list.
     *
     * @return Response
     */
    public function sort()
    {
        $this->repository->sort(Input::all());
        return Response::json([
            'error'   => false,
            'message' => trans('global.Items sorted')
        ], 200);
    }
}
