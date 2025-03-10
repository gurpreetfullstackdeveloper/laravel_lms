
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Course extends Model {
        use HasFactory;
        protected $fillable = ['user_id', 'title', 'description', 'price'];

        public function instructor() {
            return $this->belongsTo(User::class, 'user_id');
        }
    }
    