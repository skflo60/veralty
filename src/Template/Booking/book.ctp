<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking[]|\Cake\Collection\CollectionInterface $booking
 */
    echo $this->Html->script('/js/calendar/js/pignose.calendar.full.min');
    echo $this->Html->css('/js/calendar/css/pignose.calendar.min');
?>
<div class="booking index large-9 medium-8 columns content">
    <h3><?= __('Booking') ?></h3>
    <?= $this->Form->input('bookings', array(
                'multiple' => 'checkbox',
                'options' => $bookings
            ));
     ?>
    <div class="calendar"></div>
</div>
<script>
    $('.calendar').pignoseCalendar({
        lang: 'fr'
    });
        // date-like strings.
    $('.calendar').pignoseCalendar({
            lang: 'fr',
            disabledDates: [
            '2018-08-01',
            '2018-08-04',
            '2018-08-12',
        ]
    });
</script>
