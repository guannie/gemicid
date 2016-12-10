<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AminoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// check if table users is empty
        if(DB::table('amino')->get()->count() == 0){

            DB::table('amino')->insert([
            [
            'name' => 'Alanine',
            'symbol' => 'A',
            'picture' => '1.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'GCU, GCC, GCA, GCG',
            'esential' => 'Non-essential',
        	'isoelectric' => '6.01',
        	'formula'	=> 'C3H7NO2',
        	'iupac'	=> '(2S)-2-aminopropanoic acid',
        	'molar' => '89.0932 g/mol',
        	'hydropathy'	=> '1.8',
            'melting'=> '297 C',
            'boiling'	=> '250 C',
          	'density'	=> '1.432 g/cm^3',
           	'water'	=> '164 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Arginine',
            'symbol' => 'R',
            'picture' => '2.png',
            'polarity' => 'Polar',
            'acidity' => 'Basic',
            'codon' => 'CGU, CGC, CGA, CGG, AGA, AGG',
            'esential' => 'Non-essential',
        	'isoelectric' => '10.76',
        	'formula'	=> 'C6H14N4O2',
        	'iupac'	=> '(2S)-2-amino-5-(diaminomethylideneamino)pentanoic acid',
        	'molar' => '174.201 g/mol',
        	'hydropathy'	=> '-4.5',
            'melting'=> '244 C',
            'boiling'	=> '368 C',
          	'density'	=> '1.3 g/cm^3',
           	'water'	=> '182 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Asparagine',
            'symbol' => 'N',
            'picture' => '3.png',
            'polarity' => 'Polar',
            'acidity' => 'Neutral',
            'codon' => 'AAU, AAC',
            'esential' => 'Non-essential',
        	'isoelectric' => '5.41',
        	'formula'	=> 'C4H8N2O3',
        	'iupac'	=> '(2S)-2,4-diamino-4-oxobutanoic acid',
        	'molar' => '132.118 g/mol',
        	'hydropathy'	=> '-3.5',
            'melting'=> '234 C',
            'boiling'	=> '438 C',
          	'density'	=> '1.543 g/cm^3',
           	'water'	=> '29.4 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Aspartic Acid',
            'symbol' => 'D',
            'picture' => '4.png',
            'polarity' => 'Polar',
            'acidity' => 'Acidic',
            'codon' => 'GAU, GAC',
            'esential' => 'Non-essential',
        	'isoelectric' => '2.85',
        	'formula'	=> 'C4H7NO4',
        	'iupac'	=> '(2S)-2-aminobutanedioic acid',
        	'molar' => '133.103 g/mol',
        	'hydropathy'	=> '-3.5',
            'melting'=> '270 C',
            'boiling'	=> '324 C',
          	'density'	=> '1.6603 g/cm^3',
           	'water'	=> '5.36 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Cysteine',
            'symbol' => 'C',
            'picture' => '5.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'UGU, UGC',
            'esential' => 'Non-essential',
        	'isoelectric' => '5.05',
        	'formula'	=> 'C3H7NO2S',
        	'iupac'	=> '(2R)-2-amino-3-sulfanylpropanoic acid',
        	'molar' => '121.16 g/mol',
        	'hydropathy'	=> '2.5',
            'melting'=> '240 C',
            'boiling'	=> '-',
          	'density'	=> '1.523 g/cm^3',
           	'water'	=> '277 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Glutamic Acid',
            'symbol' => 'E',
            'picture' => '6.png',
            'polarity' => 'Polar',
            'acidity' => 'Acidic',
            'codon' => 'GAA, GAG',
            'esential' => 'Non-essential',
        	'isoelectric' => '3.15',
        	'formula'	=> 'C5H9NO4',
        	'iupac'	=> '(2S)-2-aminopentanedioic acid',
        	'molar' => '147.129 g/mol',
        	'hydropathy'	=> '-3.5',
            'melting'=> '225 C',
            'boiling'	=> '201 C',
          	'density'	=> '1.538 g/cm^3',
           	'water'	=> '8.88 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Glutamine',
            'symbol' => 'Q',
            'picture' => '7.png',
            'polarity' => 'Polar',
            'acidity' => 'Neutral',
            'codon' => 'CAA, CAG',
            'esential' => 'Non-essential',
        	'isoelectric' => '5.65',
        	'formula'	=> 'C5H10N2O3',
        	'iupac'	=> '(2S)-2,5-diamino-5-oxopentanoic acid',
        	'molar' => '146.144 g/mol',
        	'hydropathy'	=> '-3.5',
            'melting'=> '185 C',
            'boiling'	=> '-',
          	'density'	=> '1.364 g/cm^3',
           	'water'	=> '41.3 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Glycine',
            'symbol' => 'G',
            'picture' => '8.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'GGU, GGC, GGA, GGG',
            'esential' => 'Non-essential',
        	'isoelectric' => '6.06',
        	'formula'	=> 'C2H5NO2',
        	'iupac'	=> '2-aminoacetic acid',
        	'molar' => '75.07 g/mol',
        	'hydropathy'	=> '-0.4',
            'melting'=> '290 C',
            'boiling'	=> '-',
          	'density'	=> '1.161 g/cm^3',
           	'water'	=> '249 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Histidine',
            'symbol' => 'H',
            'picture' => '9.png',
            'polarity' => 'Polar',
            'acidity' => 'Basic',
            'codon' => 'CAU, CAC',
            'esential' => 'Essential',
        	'isoelectric' => '7.6',
        	'formula'	=> 'C6H9N3O2',
        	'iupac'	=> '(2S)-2-amino-3-(1H-imidazol-5-yl)propanoic acid',
        	'molar' => '155.155 g/mol',
        	'hydropathy'	=> '-3.2',
            'melting'=> '287 C',
            'boiling'	=> '-',
          	'density'	=> '-',
           	'water'	=> '45.6 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Isoleucine',
            'symbol' => 'I',
            'picture' => '10.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'AUU, AUC, AUA',
            'esential' => 'Essential',
        	'isoelectric' => '6.05',
        	'formula'	=> 'C6H13NO2',
        	'iupac'	=> '(2S,3S)-2-amino-3-methylpentanoic acid',
        	'molar' => '131.173 g/mol',
        	'hydropathy'	=> '4.5',
            'melting'=> '284 C',
            'boiling'	=> '169 C',
          	'density'	=> '-',
           	'water'	=> '34.4 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Leucine',
            'symbol' => 'L',
            'picture' => '11.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'UUA, UUG, CUU, CUC, CUA, CUG',
            'esential' => 'Essential',
        	'isoelectric' => '6.01',
        	'formula'	=> 'C6H13NO2',
        	'iupac'	=> '(2S)-2-amino-4-methylpentanoic acid',
        	'molar' => '131.173 g/mol',
        	'hydropathy'	=> '3.8',
            'melting'=> '293 C',
            'boiling'	=> '146 C',
          	'density'	=> '1.293 g/cm^3',
           	'water'	=> '21.5 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Lysine',
            'symbol' => 'K',
            'picture' => '12.png',
            'polarity' => 'Polar',
            'acidity' => 'Basic',
            'codon' => 'AAA, AAG',
            'esential' => 'Essential',
        	'isoelectric' => '9.60',
        	'formula'	=> 'C6H14N2O2',
        	'iupac'	=> '(2S)-2,6-diaminohexanoic acid',
        	'molar' => '146.188 g/mol',
        	'hydropathy'	=> '-3.9',
            'melting'=> '244 C',
            'boiling'	=> '-',
          	'density'	=> '-',
           	'water'	=> '1.5 kg/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Methionine',
            'symbol' => 'M',
            'picture' => '13.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'AUG',
            'esential' => 'Essential',
        	'isoelectric' => '5.74',
        	'formula'	=> 'C5H11NO2S',
        	'iupac'	=> '(2S)-2-amino-4-methylsulfanylbutanoic acid',
        	'molar' => '149.211 g/mol',
        	'hydropathy'	=> '1.9',
            'melting'=> '280 C',
            'boiling'	=> '181 C',
          	'density'	=> '1.340 g/cm^3',
           	'water'	=> '56.6 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Phenylalanine',
            'symbol' => 'F',
            'picture' => '14.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'UUU, UUC',
            'esential' => 'Essential',
        	'isoelectric' => '5.49',
        	'formula'	=> 'C9H11NO2',
        	'iupac'	=> '(2S)-2-amino-3-phenylpropanoic acid',
        	'molar' => '165.189 g/mol',
        	'hydropathy'	=> '2.8',
            'melting'=> '283 C',
            'boiling'	=> '295 C',
          	'density'	=> '0.754 g/cm^3',
           	'water'	=> '26.4 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Proline',
            'symbol' => 'P',
            'picture' => '15.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'CCU, CCC, CCA, CCG',
            'esential' => 'Non-essential',
        	'isoelectric' => '6.30',
        	'formula'	=> 'C5H9NO2',
        	'iupac'	=> '(2S)-pyrrolidine-2-carboxylic acid',
        	'molar' => '115.13 g/mol',
        	'hydropathy'	=> '-1.6',
            'melting'=> '221 C',
            'boiling'	=> '-',
          	'density'	=> '1.35 g/cm^3',
           	'water'	=> '162 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Serine',
            'symbol' => 'S',
            'picture' => '16.png',
            'polarity' => 'Polar',
            'acidity' => 'Neutral',
            'codon' => 'UCU, UCC, UCA, UCG, AGU, AGC',
            'esential' => 'Non-essential',
        	'isoelectric' => '5.68',
        	'formula'	=> 'C3H7NO3',
        	'iupac'	=> '(2S)-2-amino-3-hydroxypropanoic acid',
        	'molar' => '105.093 g/mol',
        	'hydropathy'	=> '-0.8',
            'melting'=> '228 C',
            'boiling'	=> '259 C',
          	'density'	=> '1.603 g/cm^3',
           	'water'	=> '425 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Threonine',
            'symbol' => 'T',
            'picture' => '17.png',
            'polarity' => 'Polar',
            'acidity' => 'Neutral',
            'codon' => 'ACU, ACC, ACA, ACG',
            'esential' => 'Essential',
        	'isoelectric' => '5.60',
        	'formula'	=> 'C4H9NO3',
        	'iupac'	=> '(2S,3R)-2-amino-3-hydroxybutanoic acid',
        	'molar' => '119.119 g/mol',
        	'hydropathy'	=> '-0.7',
            'melting'=> '256 C',
            'boiling'	=> '-',
          	'density'	=> '1.464 g/cm^3',
           	'water'	=> '97.0 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Tryptophan',
            'symbol' => 'W',
            'picture' => '18.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'UGG',
            'esential' => 'Essential',
        	'isoelectric' => '5.89',
        	'formula'	=> 'C11H12N2O2',
        	'iupac'	=> '(2S)-2-amino-3-(1H-indol-3-yl)propanoic acid',
        	'molar' => '204.225 g/mol',
        	'hydropathy'	=> '-0.9',
            'melting'=> '282 C',
            'boiling'	=> '-',
          	'density'	=> '1.34 g/cm^3',
           	'water'	=> '11.4 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Tyrosine',
            'symbol' => 'Y',
            'picture' => '19.png',
            'polarity' => 'Polar',
            'acidity' => 'Neutral',
            'codon' => 'UAU, UAC',
            'esential' => 'Non-essential',
        	'isoelectric' => '5.64',
        	'formula'	=> 'C9H11NO3',
        	'iupac'	=> '(2S)-2-amino-3-(4-hydroxyphenyl)propanoic acid',
        	'molar' => '181.189 g/mol',
        	'hydropathy'	=> '-1.3',
            'melting'=> '344 C',
            'boiling'	=> '-',
          	'density'	=> '1.41 g/cm^3',
           	'water'	=> '0.453 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
           	[
            'name' => 'Valine',
            'symbol' => 'V',
            'picture' => '20.png',
            'polarity' => 'Non-Polar',
            'acidity' => 'Neutral',
            'codon' => 'GUU, GUC, GUA, GUG',
            'esential' => 'Essential',
        	'isoelectric' => '6.00',
        	'formula'	=> 'C5H11NO2',
        	'iupac'	=> '(2S)-2-amino-3-methyl-butanoic acid',
        	'molar' => '117.46 g/mol',
        	'hydropathy'	=> '4.2',
            'melting'=> '315 C',
            'boiling'	=> '-',
          	'density'	=> '1.23 g/cm^3',
           	'water'	=> '88.5 g/L',
           	'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
           	],
        ]);

 

   
    	}
	}
}
