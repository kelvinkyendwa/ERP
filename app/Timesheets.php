<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Timesheets extends Model
{
		protected $guarded = ['id'];
		public function authorise()
		{
		$this->authorised = true;
		}
		
		public function isAuthorised()
		{
			return $this->authorised;
		}
		public function project()
			{
				return $this->belongsTo(Project::class);
			}
		
		public function user()
			{
				return $this->belongsTo(User::class);
			}
			
}