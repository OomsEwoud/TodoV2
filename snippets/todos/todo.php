
                        <tr class="odd:bg-orange-100 even:bg-orange-50">
                            <td class="text-center  px-1 py-2 text-orange-800"><?= $nr + 1;?></td>
                            <td class=" px-1 py-2 text-orange-800"><?= $todo['text'];?> </td>
                            <td class="text-center  px-1 py-2 text-orange-800 flex gap-3 justify-start">
                            <form method="post">    
                                <input type="hidden" name="id" value="<?= $todo['id']?>">

                                <?php if($todo['done'] == 0): ?>
                                <button class="text-orange-600" name="check" value="1">
                                    <?=svg('check') ?>
                                </button>
                                <?php else: ?>
                                <button class="text-orange-600" name ="uncheck" value="1">
                                    <?= svg('cross')?>
                                </button>
                                <?php endif;?>
                                <button class="text-orange-600" name="delete" value="1">
                                    <?= svg('trash')?>
                                </button>
                            </form>
                            </td>
                        </tr>