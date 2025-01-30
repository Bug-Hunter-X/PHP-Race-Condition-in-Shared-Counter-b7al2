The solution uses a mutex lock (using `pthread_mutex_lock` and `pthread_mutex_unlock` provided by the `pthreads` extension) to prevent concurrent access to the `$counter` variable.  This ensures that only one process can modify `$counter` at any given time.  Make sure to install the pthreads extension before running this code. This solution is applicable when working with multiple threads or processes.  For a web environment with multiple requests, consider using database transactions or other appropriate locking mechanisms.
```php
<?php
require_once 'Mutex.php';
$mutex = new Mutex;
$counter = 0;
for ($i = 0; $i < 1000; $i++) {
    $mutex->lock();
    $counter++;
    $mutex->unlock();
}
echo "Counter: " . $counter;
?>
```