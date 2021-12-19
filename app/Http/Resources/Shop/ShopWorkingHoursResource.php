<?php

namespace App\Http\Resources\Shop;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopWorkingHoursResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

          [
            'day' =>'Saturday',
            'status' => $this->getDayName('Saturday'),
            'time' => $this->displayedTime($this->sat_from, $this->sat_to),
          ],
          [
            'day' =>'Sunday',
            'status' => $this->getDayName('Sunday'),
            'time' => $this->displayedTime($this->sun_from, $this->sun_to),
          ],
          [
            'day' =>'Monday',
            'status' => $this->getDayName('Monday'),
            'time' => $this->displayedTime($this->mon_from, $this->mon_to),
          ],
          [
            'day' =>'Tuesday',
            'status' => $this->getDayName('Tuesday'),
            'time' => $this->displayedTime($this->tue_from, $this->tue_to),
          ],
          [
            'day' =>'Wednesday',
            'status' => $this->getDayName('Wednesday'),
            'time' => $this->displayedTime($this->wed_from, $this->wed_to),
          ],
          [
            'day' =>'Thursday',
            'status' => $this->getDayName('Thursday'),
            'time' => $this->displayedTime($this->thu_from, $this->thu_to),
          ],
          [
            'day' =>'Friday',
            'status' => $this->getDayName('Friday'),
            'time' => $this->displayedTime($this->fri_from, $this->fri_to),
          ],
        ];
    }

    public function displayedTime($timeFrom, $timeTo)
    {
        return $timeFrom != null ? trans('api/shop.from') . ' ' . $this->timeConvertion($timeFrom) . ' ' . trans('api/shop.to') . ' ' . $this->timeConvertion($timeTo) : trans('api/shop.closed');
    }

    public function timeConvertion($time)
    {
        return Carbon::createFromTimeString($time)->format('h:i A');
    }

    public function getDayName($day)
    {
        $locale = Carbon::getLocale();
        Carbon::setLocale('en');
        $active = Carbon::now()->dayName;
        Carbon::setLocale($locale);
        if($active == $day){
            return true;
        }
        return false;
    }
}
