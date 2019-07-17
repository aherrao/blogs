<?php
namespace App\Services\Blog;

namespace App\Services\Blog\Hander\Create;
namespace App\Services\Blog\Hander\Update;
namespace App\Services\Blog\Hander\Remove;

class BlogManager
{
	private $strategy = NULL; 
	
    /**
     * make an incoming request.
     *
     * @param  \Illuminate\Http\Request  $strStrategyType
     * @return mixed
     */
    public function __construct($strStrategyType) {
    {
		case 'create':
			 $this->strategy = new Create();
			 break;
		case 'update':
			 $this->strategy = new Update();
			 break;	
		case 'delete':
			 $this->strategy = new Remove();
			 break;	
    }
	
	public function action($request) {
		return $this->strategy->action($request);
    }
}