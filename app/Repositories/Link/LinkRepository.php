<?php
namespace App\Repositories\Link;

use App\Repositories\BaseRepository;
use App\Repositories\BaseInterface;
use App\Models\Link;

class LinkRepository extends BaseRepository implements LinkRepositoryInterface
{
    /**
     * Specify Model class name
     */
    public function __construct(Link $link)
    {
        $this->model = $link;
    }

    public function createLinkUser()
    {
        $strDefault = config('setting.str_default');
        $tokenUser = substr(str_shuffle($strDefault), 0, 16);

        return $tokenUser;
    }

    public function createLinkAdmin()
    {
        $strDefault = config('setting.str_default');
        $tokenAdmin = substr(str_shuffle($strDefault), 0, 16);

        return $tokenAdmin;
    }
}
