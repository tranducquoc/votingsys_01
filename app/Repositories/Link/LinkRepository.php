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
        $strUser = md5(time().'user');
        $tokenUser = substr($strUser, 0, 16);

        return $tokenUser;
    }

    public function createLinkAdmin()
    {
        $strAdmin = md5(time().'admin');
        $tokenAdmin = substr($strAdmin, 0, 16);

        return $tokenAdmin;
    }
}
