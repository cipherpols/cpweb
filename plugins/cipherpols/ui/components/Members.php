<?php namespace Cipherpols\Ui\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\MediaLibrary;
use Illuminate\Support\Facades\DB;

class Members extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Cipherpols Members',
            'description' => 'Show all Cipherpols members.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * Get members
     * @return string
     */
    public function onRun()
    {
        $members = Db::table('members')
            ->orderBy('order', 'asc')
            ->get();
        foreach ($members as $member) {
            if (!empty($member->avatar)) {
                $member->avatarUrl = MediaLibrary::instance()->getPathUrl($member->avatar);
            }
        }
        $this->page['members'] = $members;
    }

}
