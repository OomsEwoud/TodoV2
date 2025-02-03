
                        <tr class="odd:bg-orange-100 even:bg-orange-50">
                            <td class="text-center  px-1 py-2 text-orange-800">1</td>
                            <td class=" px-1 py-2 text-orange-800"><?= $todo['text'];?> </td>
                            <td class="text-center  px-1 py-2 text-orange-800 flex gap-3 justify-start">
                                <button class="text-orange-600">
                                    <?=svg('check') ?>
                                </button>
                                <button class="text-orange-600">
                                    <?= svg('cross')?>
                                </button>
                                <button class="text-orange-600">
                                    <?= svg('trash')?>
                                </button>
                            </td>
                        </tr>