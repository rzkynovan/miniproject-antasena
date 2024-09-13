<div class="w-full divide-y divide divide-primary-300 overflow-hidden rounded-md border-neutral-300 bg-white text-primary-900 dark:border-neutral-700 ">
    <div x-data="{ isExpanded: false }" class="divide-y divide-primary-300">
        <button id="controlsAccordionItemOne" type="button" class="flex w-full items-center justify-between gap-4 p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none bg-white aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? ' text-black'  : 'text-black'" :aria-expanded="isExpanded ? 'true' : 'false'">
            Module 1: Introduction to Hydrogen Energy
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
        <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
           <ul class="p-4 ml-5 text-sm sm:text-base text-pretty list-disc">
            <li>
                <p>Fundamentals of hydrogen</p>
            </li>
            <li>
                <p>Hydrogen production methods</p>
            </li>
            <li>
                <p>Hydrogen storage and transportation</p>
            </li>
           </ul>
        </div>
    </div>
    <div x-data="{ isExpanded: false }" class="divide-y divide-primary-300">
        <button id="controlsAccordionItemTwo" type="button" class="flex w-full items-center justify-between gap-4 p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none bg-white aria-controls="accordionItemTwo" @click="isExpanded = ! isExpanded" :class="isExpanded ? ' text-black'  : 'text-black'" :aria-expanded="isExpanded ? 'true' : 'false'">
            Module 2: Hydrogen Fuel Cells and Applications
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
        <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region" aria-labelledby="controlsAccordionItemTwo" x-collapse>
            <ul class="p-4 ml-5 text-sm sm:text-base text-pretty list-disc">
                <li>
                    <p>Fundamentals of hydrogen</p>
                </li>
                <li>
                    <p>Hydrogen production methods</p>
                </li>
                <li>
                    <p>Hydrogen storage and transportation</p>
                </li>
               </ul>
        </div>
    </div>
    <div x-data="{ isExpanded: false }" class="divide-y divide-primary-300">
        <button id="controlsAccordionItemThree" type="button" class="flex w-full items-center justify-between gap-4 p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none bg-white aria-controls="accordionItemThree" @click="isExpanded = ! isExpanded" :class="isExpanded ? ' text-black'  : 'text-black'" :aria-expanded="isExpanded ? 'true' : 'false'">
            Module 3: Renewable Energy Integration with Hydrogen
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
               <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
        <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region" aria-labelledby="controlsAccordionItemThree" x-collapse>
            <ul class="p-4 ml-5 text-sm sm:text-base text-pretty list-disc">
                <li>
                    <p>Fundamentals of hydrogen</p>
                </li>
                <li>
                    <p>Hydrogen production methods</p>
                </li>
                <li>
                    <p>Hydrogen storage and transportation</p>
                </li>
               </ul>
        </div>
    </div>
</div>
