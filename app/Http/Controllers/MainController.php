<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DiDom\Document;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class MainController extends Controller
{
    public function index()
    {
        $pathToImage = 'screenshots/1.jpg';
        dd($pathToImage);

        Browsershot::url('https://example.com')
            ->setOption('addScriptTag', json_encode(['content' => 'alert("Hello World")']))
            ->save($pathToImage);




        dd(__METHOD__);
        $html = file_get_contents("parsed/bets.html");
        $start = microtime(true);

        $domHtml = new Document($html);

//        $events = $domHtml->find('.table__row');
        $events = $domHtml->find('[class=table__row]');
        //dd($events);

        foreach ($events as $key => $event) {
            $bets[$key]['bookmaker_id'] = 1;
            // get event tournament

            $bets[$key]['tournament'] = trim($event->parent()->find('.table__title-text')[0]->text());

            // get event date
            //$datetime = $event->find('meta[itemprop=startDate]')[0]->attr('content');
            if (($element = @$event->find('meta[itemprop=startDate]')[0]) !== null) {
                $datetime = $element->attr('content');

                $bets[$key]['datetime'] = $this->formatDate($datetime);
            }



            // TODO: add date validation
            // get contestants names
            //$bets[$key]['contestant_1'] = $event->find('span[itemprop=homeTeam]')[0]->text();
            //$bets[$key]['contestant_2'] = $event->find('span[itemprop=awayTeam]')[0]->text();
            if (($element = @$event->find('span[itemprop=homeTeam]')[0]) !== null) {
                $bets[$key]['contestant_1'] =$element->text();
            }
            if (($element = @$event->find('span[itemprop=awayTeam]')[0]) !== null) {
                $bets[$key]['contestant_2'] =$element->text();
            }


            // get all odds for event
            //$bets[$key]['win1'] = $event->find('.table__col._type_btn._type_normal')[0]->text();
            //$bets[$key]['draw'] = $event->find('.table__col._type_btn._type_normal')[1]->text();
            //$bets[$key]['win2'] = $event->find('.table__col._type_btn._type_normal')[2]->text();
            if (($element = @$event->find('.table__col._type_btn._type_normal')[0]) !== null) {
                $bets[$key]['win1'] =$element->text();
            }
            if (($element = @$event->find('.table__col._type_btn._type_normal')[1]) !== null) {
                $bets[$key]['draw'] =$element->text();
            }
            if (($element = @$event->find('.table__col._type_btn._type_normal')[2]) !== null) {
                $bets[$key]['win2'] =$element->text();
            }
            if (($element = @$event->find('.table__col._type_btn._type_normal')[3]) !== null) {
                $bets[$key]['d1x'] =$element->text();
            }
            if (($element = @$event->find('.table__col._type_btn._type_normal')[4]) !== null) {
                $bets[$key]['d12'] =$element->text();
            }
            if (($element = @$event->find('.table__col._type_btn._type_normal')[5]) !== null) {
                $bets[$key]['dx2'] =$element->text();
            }
            //$bets[$key]['d1x'] = @$event->find('.table__col._type_btn._type_normal')[3]->text();
            //$bets[$key]['d12'] = @$event->find('.table__col._type_btn._type_normal')[4]->text();
            //$bets[$key]['dx2'] = @$event->find('.table__col._type_btn._type_normal')[5]->text();

//            $total = $event->find('.table__col._type_fora')[2]->text();
//
//            if($total === '2.5'){
//                $bets[$key]['to2_5'] = $event->find('.table__col._type_btn._type_normal')[8]->text();
//                $bets[$key]['tu2_5'] = $event->find('.table__col._type_btn._type_normal')[9]->text();
//            }

//            $bets[$key] = array_merge($bets[$key], $bookmakerParser->getOdds($event, $key));
            //dd($bets);
        }


        dd(__METHOD__, microtime(true)-$start, $bets);

    }

    public function formatDate(string $datetime): string
    {
        // "2021-03-15T23:00" -> "2021-03-15 20:00:00"
        [$date, $time] = explode('T', $datetime);

        $datetime = "$date $time:00";

        return $this->minus3Hours($datetime);
    }

    public function minus3Hours(string $datetime):string
    {
        return (new Carbon($datetime))->subHours(3);
    }

}
